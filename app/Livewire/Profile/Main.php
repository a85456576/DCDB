<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;

class Main extends Component
{
    use WithFileUploads, LivewireAlert;
    #[Validate('required|string|max:40')]
    public $name;
    public $email;
    #[Validate('nullable|string|max:255')]
    public $password;
    #[Validate('nullable|string|max:255|min:8')]
    public $newPassword;
    public $disabledPassword = false;
    public $isPasswordMatched = false;
    public $isCurrentPasswordMatched = false;
    public $admin;


    public function mount()
    {
        $this->admin = User::find(Auth::id());
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    protected function rules()
    {
        return [
            "email" => [
                "required",
                "max:255",
                Rule::unique('users', 'email')->ignore($this->admin->id)
            ]
        ];
    }

    public function render()
    {
        return view('livewire.profile.main');
    }

    public function checkOldPassword()
    {
        if (!empty($this->password)) {
            if (!Hash::check($this->password, $this->admin->password)) {
                $this->isCurrentPasswordMatched = true;
                $this->disabledPassword = false;
                return;
            }
            if (Hash::check($this->password, $this->admin->password)) {
                $this->disabledPassword = true;
                $this->isCurrentPasswordMatched = false;
            }
        }
    }

    public function edit()
    {
        $this->validate();

        if (!empty($this->password)) {
            if (!Hash::check($this->password, $this->admin->password)) {
                $this->isCurrentPasswordMatched = true;
                $this->disabledPassword = false;
                return;
            }
            if (Hash::check($this->password, $this->admin->password)) {
                $this->disabledPassword = true;
                $this->isCurrentPasswordMatched = false;
                $this->validate([
                    'newPassword' => ['required'],
                ]);
            }
        }

        if ($this->newPassword) {
            if (Hash::check($this->newPassword, $this->admin->password)) {
                $this->isPasswordMatched = true;
                return;
            } else {
                $this->isPasswordMatched = false;
            }
        }

        $password = $this->admin->password;
        if ($this->newPassword) {
            $password = Hash::make($this->newPassword);
        }

        $this->admin->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $password,
        ]);

        $this->dispatch('closeModal');
        $this->alert('success', 'تم تعديل معلومات الملف الشخصي بنجاح', [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => false,
        ]);

        $this->reset([
            'disabledPassword',
            'isPasswordMatched',
            'isCurrentPasswordMatched',
            'password',
            'newPassword',
        ]);
        if (auth()->user()->role == 3) {
            $this->dispatch('refreshCvProfile');
        }
        $this->render();
    }

    public function closeModal()
    {
        $this->reset([
            'disabledPassword',
            'isPasswordMatched',
            'isCurrentPasswordMatched',
            'password',
            'newPassword',
        ]);
    }
}
