<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;


class Main extends Component
{

    public function delete($servicesID)
    {
        $service = Service::find($servicesID);
        Storage::disk("public")->delete($service->image);
        $service->delete();
    }

    public function setServiceId($id)
    {
        $this->dispatch('editService', ['id' => $id]);
    }

    // إظهار البيانات في الواجهة
    public function render()
    {
        return view('livewire.services.main', [
            'services' => Service::latest()->paginate(10)
        ]);
    }
}
