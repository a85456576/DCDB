<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;

class Main extends Component
{

    public $todos,$search;

    #[On('openTodosCanvas')]
    public function render()
    {
        if ($this->search) {
            $this->todos = Todo::where([ ['title', 'LIKE', '%' . $this->search . '%']])
                ->get();
        } else {
            $this->todos = Todo::get();
        }

        return view('livewire.todos.main',[
            'tasks'=>$this->todos,
        ]);
    }

}
