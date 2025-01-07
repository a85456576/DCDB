<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class AddModal extends Component
{
    #[Validate('required|string|max:60')]
    public $title;
    #[Validate('required|string|min:10')]
    public $content;

    public function add()
    {
        $id =Auth::user()->id;
        $this->validate();
        Note::create([
            'title' => $this->title,
            'contents' => $this->content,
            'user_id' => $id,
        ]);
        $this->reset(['title', 'content']);
        $this->dispatch('addNote');
    }
    public function render()
    {
        return view('livewire.notes.add-modal');
    }
}
