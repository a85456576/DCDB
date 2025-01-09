<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;
use Livewire\Attributes\Validate;

class EditModal extends Component
{

    public $todo;

    #[Validate('required|string|max:60')]
    public $title;
    #[Validate('required|string|min:10')]
    public $description;

    public $dueDate;



    public function editTodo($parameters)
    {
        $this->todo = Todo::find($parameters['id']);
        $this->title = $this->todo->name;
        $this->description = $this->todo->description;
        $this->dueDate = $this->todo->dueDate;
    }
    public function render()
    {
        return view('livewire.todos.edit-modal');
    }

    public function edit()
    {
        $this->validate();

        $this->todo->update([
            'title' => $this->title,
            'description' => $this->description,
            'dueDate' => $this->dueDate,
        ]);

        $this->reset(['title', 'description', 'dueDate']);
        $this->dispatch('updateTodo');
        $this->dispatch('refreshDetails');
    }

}
