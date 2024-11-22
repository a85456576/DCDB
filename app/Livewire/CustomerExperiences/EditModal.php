<?php

namespace App\Livewire\CustomerExperiences;

use App\Models\GeneralCustomerExperience;
use Livewire\WithPagination;
use Livewire\Component;
use Livewire\Attributes\On;


class EditModal extends Component
{
    use WithPagination;
    public $title, $description, $experience ;
    protected $rules = [
        "title" => "required|max:255",
        "description" => "required|max:8000",
    ];
    #[On('editExperience')]
    public function editExperience($params)
    {

        $this->experience = GeneralCustomerExperience::find($params['id']);
        $this->title = $this->experience->title;
        $this->description = $this->experience->description;

    }
    public function edit()
    {

        // Validate the data
        $this->validate();


        $this->experience->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
    public function render()
    {
        return view('livewire.customer-experiences.edit-modal');
    }
}
