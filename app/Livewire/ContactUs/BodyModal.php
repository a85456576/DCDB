<?php

namespace App\Livewire\Contactus;

use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;

class BodyModal extends Component
{
    public $body;

    #[On('showBody')]
    public function showBody($params)
    {
        $this->body = Contact::find($params['id'])->body;
    }

    public function render()
    {
        return view('livewire.contactus.body-modal');
    }
}
