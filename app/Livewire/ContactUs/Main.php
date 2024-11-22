<?php

namespace App\Livewire\Contactus;

use App\Models\Contact;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination, LivewireAlert;
    public $contact;

    public function render()
    {
        $contacts = Contact::paginate(80);
        return view('livewire.contactus.main', [
            'contacts' => $contacts
        ]);
    }

    public function showBodyContents($id)
    {
        $this->dispatch('showBody', ['id' => $id]);
    }

    public function remove($id)
    {
        $this->contact = Contact::find($id);
        $this->alert('warning', "هل انت متاكد من الحذف  ؟", [
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
        $this->contact->delete();

        $this->alert('success', 'تم الحذف بنجاح', [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => false,
        ]);

        $this->render();
    }
}
