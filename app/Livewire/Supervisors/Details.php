<?php

namespace App\Livewire\Supervisors;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;

class Details extends Component
{
    use LivewireAlert;

    public $supervisor;
    public $supervisorId;
    public $isDetailsVisible = false;

    #[On('refreshDetails')]
    public function render()
    {
        return view('livewire.supervisors.details');
    }

    public function showDetails()
    {
        $this->isDetailsVisible = !$this->isDetailsVisible;
    }

    public function setSupervisorId()
    {
        $this->dispatch('editSupervisor', ['id' => $this->supervisor->id]);
    }

    public function remove($id)
    {
        $this->supervisorId = $id;
        $this->alert('warning', "هل انت متاكد من حذف {$this->supervisor->name} ؟", [
            'position' => 'center',
            'timer' => 10000,
            'toast' => false,
            'showCancelButton' => true,
            'width' => '600',
            'cancelButtonText' => 'لا',
            'showConfirmButton' => true,
            'confirmButtonText' => 'نعم',
            'onConfirmed' => 'destroy',
            'confirmButtonColor' => '#D63E30',
        ]);
    }

    #[On('destroy')]
    public function destroy()
    {
        $this->supervisor->delete();
        $this->dispatch('deleteSupervisor');
    }

    public function changeState()
    {
        $this->supervisor->update([
            'status' => !$this->supervisor->status
        ]);

        $this->dispatch('$refresh');
    }
}
