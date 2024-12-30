<?php

namespace App\Livewire\Supervisors;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;

class EditModal extends Component
{

    use WithFileUploads;
    #[Validate('required|string|max:50')]
    public $name;
    public $email;
    public $password;
    public $supervisor;

    protected function rules()
    {
        return [
            "email" => [
                "required",
                "max:255",
                Rule::unique('users', 'email')->ignore($this->supervisor->id)
            ]
        ];
    }

    #[On('editSupervisor')]
    public function editSupervisor($parameters)
    {
        $this->supervisor = User::find($parameters['id']);
        $this->name = $this->supervisor->name;
        $this->email = $this->supervisor->email;
    }

    public function render()
    {
        return view('livewire.supervisors.edit-modal');
    }

    public function edit()
    {
        $this->validate();

        $newPassword = $this->supervisor->password;
        if ($this->password) {
            $newPassword = Hash::make($this->password);
        }

        $this->supervisor->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $newPassword,
        ]);

        $this->reset(['name', 'password', 'email']);
        $this->dispatch('updateSupervisor');
        $this->dispatch('refreshDetails');
    }
}
