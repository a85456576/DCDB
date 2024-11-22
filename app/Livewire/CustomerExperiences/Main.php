<?php

namespace App\Livewire\CustomerExperiences;

use App\Models\GeneralCustomerExperience;
use Livewire\Component;

class Main extends Component
{
    public function delete($experienceID)
    {
        GeneralCustomerExperience::find($experienceID)->delete();
    }
    public function setExperienceID($id)
    {
        $this->dispatch('editExperience', ['id' => $id]);
    }

    public function render()
    {
        return view('livewire.customer-experiences.main',[
            'experiences'=> GeneralCustomerExperience::latest()->paginate(10),
        ]);
    }
}
