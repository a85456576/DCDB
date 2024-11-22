<?php

namespace App\Livewire\News;

use App\Models\News;
use Livewire\Component;
use App\Models\NewsImage;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class EditModal extends Component
{
    use WithFileUploads;
    public $new, $img, $title, $description, $date, $image;

    protected $rules = [
        "title" => "required|string|max:255",
        "description" => "required|string|max:500",
        "date" => "required|date",
        'image' => 'nullable|image|max:1024',
    ];

    #[On('editNew')]
    public function editNew($params)
    {
        $this->new = News::find($params['id']);
        // $this->img = $this->new->images[0]->image;
        $this->title = $this->new->title;
        $this->description = $this->new->description;
        $this->date = $this->new->date;
    }

    public function edit()
    {

        // التحقق من صحة البيانات
        $validatedData = $this->validate();

        // التعامل مع رفع الصورة إذا كانت موجودة
        if ($this->img) {
            if ($this->new->images[0]->image) {
                Storage::disk('public')->delete(paths: $this->new->images[0]->image);
            }
            $imagePath = $this->img->store('news_images', 'public');
            $validatedData['image'] = $imagePath;
        }


        // تحديث بيانات الخبر
        $this->new->update([
            "title" => $this->title,
            "description" => $this->description,
            "date" => $this->date,
        ]);

        // تحديث الصورة إذا تم رفع صورة جديدة
        if (!empty($validatedData['image']) && $this->img) {
            $this->new->images[0]->update([
                'image' => $validatedData['image'],
            ]);
        }

        return $this->redirect('/news'); // تعديل الوجهة حسب الحاجة
    }

    public function render()
    {
        return view('livewire.news.edit-modal');
    }
}
