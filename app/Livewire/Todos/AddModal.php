<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;

class AddModal extends Component
{

    #[Validate('required|string|max:60')]
    public $title;
    #[Validate('required|string|min:10')]
    public $description;

    public $dueDate;
    public function render()
    {
        return view('livewire.todos.add-modal');
    }
    public function add()
    {
        $this->validate();
        Todo::create([
            'title' => $this->title,
            'description' => $this->description,
            'due_date' => $this->dueDate,
            'user_id' => Auth::user()->id,
        ]);
        $this->reset(['title', 'content']);
        $this->dispatch('addNote');
    }

}
