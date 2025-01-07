<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;
use Livewire\Attributes\Validate;

class EditModal extends Component
{

    public $note;

    #[Validate('required|string|max:60')]
    public $title;
    #[Validate('required|string|min:10')]
    public $content;



    public function editNote($parameters)
    {
        $this->note = Note::find($parameters['id']);
        $this->title = $this->note->name;
        $this->content = $this->note->contents;
    }
    public function render()
    {
        return view('livewire.notes.edit-modal');
    }

    public function edit()
    {
        $this->validate();

        $this->supervisor->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['title', 'content']);
        $this->dispatch('updateNote');
        $this->dispatch('refreshDetails');
    }
}
