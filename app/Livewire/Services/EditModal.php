<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class EditModal extends Component
{

    use WithFileUploads, WithPagination, LivewireAlert;

    public $editingID, $service , $title, $subTitle, $description,$descriptionList , $link, $linkTitle,$image;
    // public $editingNew;


    protected $rules = [
        "title" => "required|max:160",
        "subTitle" => "required|max:255", // تطابق الاسم مع الخاصية
        "link" => "required|max:255",
        "linkTitle" => "required|max:100",
        "description" => "required|max:8000",
        "descriptionList" => "required|max:12000",
        'image' => 'required|image|max:1024',
    ];




    #[On('editService')]
    public function editService($params)
    {

        $this->service = Service::find($params['id']);
        $this->title = $this->service->title;
        $this->subTitle = $this->service->sub_title;
        $this->description = $this->service->description;
        $this->descriptionList = $this->service->description_list;
        $this->link = $this->service->link;
        $this->linkTitle = $this->service->link_title;
        $this->image = $this->service->image;
    }

    public function render()
    {
        return view('livewire.services.edit-modal', [
            'services' => Service::latest()->get(),
        ]);
    }



    public function edit()
    {

        // Validate the data
        $validatedData = $this->validate();

        // Handle image upload if provided
        if ($this->image) {
            if ($this->new->images[0]) {
                Storage::disk('public')->delete(paths: $this->new->images[0]);
            }
            $imagePath = $this->image->store('uploads', 'public'); // Store the image in the public disk
            $validatedData['image'] = $imagePath; // Store the image path in the database
        }
        $this->service->update([
            'title' => $this->title,
            'sub_title' => $this->subTitle, // Converted name for the database
            'link' => $this->link,
            'link_title' => $this->linkTitle,
            'description' => $this->description,
            'description_list' => $this->descriptionList,
            'image' => $validatedData['image'] // Save the image path
            // 'image' => $this->image,
        ]);



        return $this->redirect('/services');
    }

}
