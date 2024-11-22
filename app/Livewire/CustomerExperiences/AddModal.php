<?php

namespace App\Livewire\CustomerExperiences;

use App\Models\GeneralCustomerExperience;
use Livewire\WithPagination;
use Livewire\Component;

class AddModal extends Component
{
    use WithPagination;

    public $title, $description ;

    protected $rules = [
        "title" => "required|string|max:255",
        "description" => "required|string|max:8000",
    ];

    public function create()
    {
        $this->validate();
        {
            GeneralCustomerExperience::create([
                "title" => $this->title,
                "description" => $this->description,
            ]);


            return $this->redirect('/customer/experiences');
        }
    }

    public function render()
    {
        return view('livewire.customer-experiences.add-modal');
    }
}
