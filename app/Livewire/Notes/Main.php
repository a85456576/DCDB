<?php

namespace App\Livewire\Notes;


use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Main extends Component
{
    use LivewireAlert, WithPagination;
    public $note;
    public $search;



    #[On('openNotesCanvas')]
    public function render()
    {

        $this->note = Auth::user()->note;
        // dd( Note::get());
        return view('livewire.notes.main', [
            'notes' => $this->note,
        ]);
    }

    #[On('addTodo')]
    public function addTodo()
    {
        $this->alertDialog('تم اضافة ملاحظة بنجاح');
    }

    public function editTodo()
    {
        $this->dispatch('editTodo', ['id' => $this->note->id]);
    }

    #[On('updateTodo')]
    public function updateTodo()
    {
        $this->alertDialog('تم تعديل معلومات المشرف بنجاح');
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
