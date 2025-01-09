<?php

namespace App\Livewire\Companies;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;


class AddModal extends Component
{
    #[Validate('required|string|max:120')]
    public $companyName;
    #[Validate('required|string|max:120')]
    public $managerName;
    #[Validate('required')]
    public $foundDate;


    public function add()
    {
        $this->validate();
        Company::create([
            'company_name' => $this->companyName,
            'manager_name' => $this->managerName,
            'founs_date' => $this->foundDate,
            // 'user_id' => Auth::id()
        ]);
        $this->reset(['companyName', 'managerName', 'foundDate']);
        $this->dispatch('addCompany');
    }

    public function render()
    {
        return view('livewire.companies.add-modal');
    }
}
