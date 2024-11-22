<?php

namespace App\Livewire\Services;

use Illuminate\Support\Str;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AddModal extends Component
{
    use WithFileUploads, WithPagination ;

    public $title, $subTitle, $link, $linkTitle, $description, $descriptionList, $image;

    protected $rules = [
        "title" => "required|max:160",
        "subTitle" => "required|max:255", // تطابق الاسم مع الخاصية
        "link" => "required|max:255",
        "linkTitle" => "required|max:100",
        "description" => "required|max:8000",
        "descriptionList" => "required|max:12000",
        'image' => 'required|image|max:1024',
    ];


    public function create()
{
    // Validate the data
    $validatedData = $this->validate();

    // Handle image upload if provided
    if ($this->image) {
        $imagePath = $this->image->store('uploads', 'public'); // Store the image in the public disk
        $validatedData['image'] = $imagePath; // Store the image path in the database
    }

    // Add the new service record
    Service::create([
        'title' => $this->title,
        'sub_title' => $this->subTitle, // Converted name for the database
        'link' => $this->link,
        'link_title' => $this->linkTitle,
        'description' => $this->description,
        'description_list' => $this->descriptionList,
        'image' => $validatedData['image'], // Save the image path here
    ]);

    // Flash success message
    session()->flash('success', 'تمت إضافة الخدمة بنجاح!');


    // Reset the form
    $this->reset(['title', 'subTitle', 'link', 'linkTitle', 'description', 'descriptionList', 'image']);
    // $this->alert('success', 'تم تعديل المعلومات بنجاح', [
    //         'position' => 'top-start',
    //         'timer' => 3000,
    //         'toast' => true,
    //         'timerProgressBar' => false,
    //     ]);

    return $this->redirect('/services');
}

    public function render()
    {
        return view('livewire.services.add-modal');
    }
}

