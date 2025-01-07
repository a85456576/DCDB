<?php

namespace App\Livewire\Todos;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;

class Main extends Component
{
    public $todos;

    #[On('openTodosCanvas')]
    public function render()
    {
        $this->todos = Auth::user()->todo;

        return view('livewire.todos.main',[
            'tasks'=>$this->todos,
        ]);
    }
    
}
