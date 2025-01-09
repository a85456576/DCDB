<?php

namespace App\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;


class EditModal extends Component
{
    public $company;
    #[Validate('required|string|max:120')]
    public $companyName;
    #[Validate('required|string|max:120')]
    public $managerName;
    #[Validate('required')]
    public $foundDate;
    public function render()
    {
        return view('livewire.companies.edit-modal');
    }

    #[On('editCompany')]
    public function editCompany($parameters)
    {
        $this->company = Company::find($parameters['id']);
        $this->companyName = $this->company->company_name;
        $this->managerName = $this->company->manager_name;
        $this->foundDate = $this->company->found_date;
    }

    public function edit()
    {
        $this->validate();

        $this->company->update([
            'company_name' => $this->companyName,
            'manager_name' => $this->managerName,
            'founs_date' => $this->foundDate,
        ]);

        $this->reset(['companyName', 'managerName', 'foundDate']);
        $this->dispatch('updateSupervisor');
        $this->dispatch('refreshDetails');
    }

}
