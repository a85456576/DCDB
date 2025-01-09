<?php

namespace App\Livewire\Notes;

use App\Models\Note;
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
        if ($this->search) {
            $this->note = Note::where([['user_id', Auth::id()], ['title', 'LIKE', '%' . $this->search . '%']])
                ->get();
        } else {
            $this->note = Note::where('user_id', Auth::id())->get();
        }
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
