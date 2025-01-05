<?php

namespace App\Livewire\Supervisors;

use App\Models\permission;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;

class AddModal extends Component
{
    use WithFileUploads;
    #[Validate('required|string|max:60')]
    public $name;
    #[Validate('required|string|min:8')]
    public $password;
    #[Validate('required|max:30|unique:users,email')]
    public $email;

    public $permissions = [];

    public function render()
    {
        return view('livewire.supervisors.add-modal');
    }

    public function add()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'status' => 1,
            'role' => 2,
            'access_level' => json_encode($this->permissions),
        ]);
        $this->reset(['name', 'password', 'email']);
        $this->dispatch('addSupervisor');
    }
}
