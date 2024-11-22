<?php

namespace App\Livewire\Packages;

use Livewire\Component;
use App\Models\Package;
use Livewire\WithPagination;


class AddModal extends Component
{
    use WithPagination;
    public $name, $description,$price,$serviceId;

    protected $rules = [
        "name" => "required|min:2|max:160",
        "description" => "required|min:5|max:8000",
        'price' => 'required|numeric|min:0',
        'serviceId'=> '',
    ];
    public function create()
    {
        $validatedData = $this->validate();

        $package = Package::create([
            "name"=> $this->name,
            "description"=> $this->description,
            "price"=> $this->price,
            "service_id"=> $this->serviceId,

        ]);

    }
    public function render()
    {
        return view('livewire.packages.add-modal');
    }
}
