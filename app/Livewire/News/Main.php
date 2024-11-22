<?php

namespace App\Livewire\News;

use App\Models\News;
use App\Models\NewsImage;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;


class Main extends Component
{
    public function delete($newID)
    {
        $new=News::find($newID)->delete();

        // Storage::disk("public")->delete($new->image);


    }
    public function setNewId($id)
    {
        $this->dispatch('editNew', ['id' => $id]);
    }
    public function render()
    {
        return view('livewire.news.main',[
            'news' => News::latest()->paginate(10),
            'images' => NewsImage::latest()->paginate(10)
        ]);
    }
}
