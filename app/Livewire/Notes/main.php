<?php

namespace App\Livewire\Profile;

use App\Models\User;
use App\Models\Note;
use Livewire\Component;
use Livewire\WithFileUploads;

use Jantinnerezo\LivewireAlert\LivewireAlert;


class Main extends Component
{
    use WithFileUploads, LivewireAlert;


    public function render()
    {
        return view('livewire.note.main');
    }


}
