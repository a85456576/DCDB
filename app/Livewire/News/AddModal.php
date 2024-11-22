<?php

namespace App\Livewire\News;

use Livewire\Component;
use App\Models\News;
use App\Models\NewsImage;
use Livewire\WithPagination;
use Livewire\WithFileUploads;






class AddModal extends Component
{
    use WithFileUploads, WithPagination ;
    public $title, $description, $date ,$image;

    protected $rules = [
        "title" => "required|string|max:255",
        "description" => "required|string|max:800",
        "date" => "required|date",
        'image' => 'required|image|max:1024'
    ];
    public function create()
    {

        $validatedData = $this->validate();
        if ($this->image) {
            $imagePath = $this->image->store('news_images', 'public'); // Store the image in the public disk
            $validatedData['image'] = $imagePath; // Store the image path in the database
        }
        $newsId = News::create([
            "title"=> $this->title,
            "description"=> $this->description,
            "date"=> $this->date,
        ])->id;
        // dd($news);
        $img=NewsImage::create([
            'image' => $validatedData['image'],
            'news_id' => $newsId,
        ]);
        // dd($img);
        return $this->redirect('/news');

    }
    public function render()
    {
        return view('livewire.news.add-modal');
    }
}
