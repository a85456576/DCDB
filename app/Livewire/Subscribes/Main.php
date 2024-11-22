<?php

namespace App\Livewire\Subscribes;

use App\Models\Subscribe;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class Main extends Component
{
    use LivewireAlert;

    public $subscribe;
    public $subscribes;
    public $lastIdInQuery;
    public $lastIdInTable;

    public function subscribesInfo()
    {
        $this->subscribes = Subscribe::orderByDesc('id')->take(60)->get();
        $this->lastIdInTable = Subscribe::get()->first()->id ?? 0;
    }

    public function mount()
    {
        $this->subscribesInfo();
    }


    public function render()
    {
        return view('livewire.subscribes.main');
    }

    public function loadMore()
    {
        $this->lastIdInQuery = $this->subscribes->last()->id ?? 0;
        $newSubscribes = Subscribe::where('id', '<', $this->lastIdInQuery)
            ->orderByDesc('id')
            ->take(40)
            ->get();
        $this->subscribes = $this->subscribes->concat($newSubscribes);
    }

    public function remove($id)
    {
        $this->subscribe = Subscribe::find($id);
        $this->alert('warning', "هل انت متاكد من الحذف ؟", [
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
        $this->subscribe->delete();
        $this->alert('success', 'تم حذف الاشتراك بنجاح', [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => false,
        ]);

        $this->subscribesInfo();
    }
}
