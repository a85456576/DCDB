<?php

namespace App\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;

class Main extends Component
{
    public $companies;
    public function render()
    {
        $this->companies = Company::get();

        return view('livewire.companies.main', [
            'companies' => $this->companies
        ]);
    }
    #[On('addCompany')]
    public function addCompany()
    {
        $this->alertDialog('تم اضافة شركة بنجاح');
    }

    #[On('updateCompany')]
    public function updateCompany()
    {
        $this->alertDialog('تم تعديل معلومات الشركة بنجاح');
    }

    #[On('deleteCompany')]
    public function deleteCompany()
    {
        $this->alertDialog('تم حذف الشركه بنجاح');
    }

    public function alertDialog($message)
    {
        $this->alert('success', $message, [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => false,
        ]);

        $this->dispatch('closeModal');
        $this->render();
    }
}
