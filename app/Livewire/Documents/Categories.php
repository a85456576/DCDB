<?php

namespace App\Livewire\Documents;

use Livewire\Component;
use Illuminate\Support\Str;

class Categories extends Component
{
    public $name ,$short;
    public function render()
    {
        return view('livewire.documents.categories');
    }
    public function add()
    {
        $this->validate([
            'name' => 'required|min:3|max:25|string|regex:/^[a-zA-Z\s]+$/'
            
        ]);
        $this->short = Str::upper(Str::substr($this->name,0,3));
        Categories::create([
            'name' => $this->name ,
            'shortned_name'=> $this->short ,
        ]);

        $this->reset('name');
        $this->dispatch('studyType');
    }
}
