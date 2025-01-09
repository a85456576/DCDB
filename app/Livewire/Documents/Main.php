<?php

namespace App\Livewire\Documents;

use App\Models\Document;
use Livewire\Component;


class Main extends Component
{
    public $documents;
    public function render()
    {
        $this->documents = Document::get();
        return view('livewire.documents.main',[
            'document' => $this->documents
        ]);
    }

}
