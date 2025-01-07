<?php

namespace App\Livewire\Noheader;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.noheader.main');
    }
    public function openNotes(){
        $this->dispatch('openNotesCanvas');
    }
    public function openTodos(){
        $this->dispatch('openTodosCanvas');
    }
}
