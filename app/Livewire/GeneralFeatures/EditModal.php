<?php

namespace App\Livewire\GeneralFeatures;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\GeneralFeature;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditModal extends Component
{
    use WithFileUploads,WithPagination;
    public $title, $description, $icon, $general;

    protected $rules = [
        "title" => "required|max:160",
        "description" => "required|max:8000",
        'icon' => 'required|image|max:1024',
    ];

    #[On('editGeneral')]
    public function editGeneral($params)
    {
        $this->general = GeneralFeature::find($params['id']);
        $this->title = $this->general->title;
        $this->description = $this->general->description;
        $this->icon = $this->general->icon;
    }
    public function edit()
    {

        // التحقق من صحة البيانات
        $validatedData = $this->validate();

        // التعامل مع رفع الصورة إذا كانت موجودة
        if ($this->icon) {
            if ($this->general->icon) {
                Storage::disk('public')->delete(paths: $this->general->icon);
                // dd($this->general->icon);
            }
            $iconPath = $this->icon->store('Genera_icon', 'public'); // Store the image in the public disk
            $validatedData['icon'] = $iconPath; // Store the image path in the dat
        }


        // تحديث بيانات الخبر
        $this->general->update([
            "title" => $this->title,
            "description" => $this->description,
            "icon"=> $validatedData['icon'],
        ]);
    }



    public function render()
    {
        return view('livewire.general-features.edit-modal',);
    }
}
