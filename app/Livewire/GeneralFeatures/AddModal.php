<?php

namespace App\Livewire\GeneralFeatures;

use App\Models\GeneralFeature;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;




class AddModal extends Component
{
    use WithFileUploads,WithPagination;
    public $title, $description, $icon;

    protected $rules = [
        "title" => "required|max:160",
        "description" => "required|max:8000",
        'icon' => 'required|image|max:1024',
    ];

    public function create()
    {
        $validatedData= $this->validate();

        if ($this->icon) {
            $iconPath = $this->icon->store('Genera_icon', 'public'); // Store the image in the public disk
            $validatedData['icon'] = $iconPath; // Store the image path in the database
        }

        GeneralFeature::create([
            'title' => $this->title,
            'description' => $this->description,
            'icon' => $validatedData['icon'],
        ]);
        $this->reset(['title', 'description', 'icon']);
    }


    public function render()
    {
        return view('livewire.general-features.add-modal');
    }
}
