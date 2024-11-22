<?php

namespace App\Livewire\Comments;

use App\Models\Comment;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination, LivewireAlert;
    public $comment;
    public function render()
    {
        $comments = Comment::paginate(80);
        return view('livewire.comments.main', [
            'comments' => $comments
        ]);
    }

    public function showBodyContents($id)
    {
        $this->dispatch('showBody', ['id' => $id]);
    }

    public function update($id)
    {
        $comment = Comment::find($id);
        $comment->update([
            'show_in_site' => !$comment->show_in_site
        ]);
        $this->alertDialog('تم تحديث التعليق بنجاح');
    }

    public function remove($id)
    {
        $this->comment = Comment::find($id);
        $this->alert('warning', "هل انت متاكد من حذف تعليق {$this->comment->name} ؟", [
            'position' => 'center',
            'timer' => 10000,
            'toast' => false,
            'showCancelButton' => true,
            'width' => '600',
            'cancelButtonText' => 'لا',
            'showConfirmButton' => true,
            'confirmButtonText' => 'نعم',
            'onConfirmed' => 'destroy',
            'confirmButtonColor' => '#D63E30',
        ]);
    }

    #[On('destroy')]
    public function destroy()
    {
        $this->comment->delete();
        $this->alertDialog('تم حذف التعليق بنجاح');
    }

    public function alertDialog($message)
    {
        $this->alert('success', $message, [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => false,
        ]);

        $this->render();
    }
}
