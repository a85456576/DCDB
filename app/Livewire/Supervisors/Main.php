<?php

namespace App\Livewire\Supervisors;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;

class Main extends Component
{

    use LivewireAlert;
    public $supervisors;
    public $search;

    public function render()
    {
        if ($this->search) {
            $this->supervisors = User::where('role', 2)
                ->where('name', 'LIKE', '%' . $this->search . '%')
                ->get();
        } else {
            $this->supervisors = User::where('role', 2)->get();
        }
        return view('livewire.supervisors.main');
    }

    #[On('addSupervisor')]
    public function addSupervisor()
    {
        $this->alertDialog('تم اضافة المشرف بنجاح');
    }

    #[On('updateSupervisor')]
    public function updateSupervisor()
    {
        $this->alertDialog('تم تعديل معلومات المشرف بنجاح');
    }

    #[On('deleteSupervisor')]
    public function deleteSupervisor()
    {
        $this->alertDialog('تم حذف المشرف بنجاح');
    }

    public function alertDialog($message)
    {
        $this->alert('success', $message, [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => false,
        ]);

        $this->dispatch('closeModal');
        $this->render();
    }
}
