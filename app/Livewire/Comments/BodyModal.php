<?php

namespace App\Livewire\Comments;

use Livewire\Component;
use App\Models\Comment;
use Livewire\Attributes\On;

class BodyModal extends Component
{
    public $body;

    #[On('showBody')]
    public function showBody($params)
    {
        $this->body = Comment::find($params['id'])->comment;
    }

    public function render()
    {
        return view('livewire.comments.body-modal');
    }
}
