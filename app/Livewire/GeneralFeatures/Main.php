<?php

namespace App\Livewire\GeneralFeatures;

use App\Models\GeneralFeature;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;



class Main extends Component
{
    public function delete($featureID)
    {
        $features = GeneralFeature::find($featureID);
        Storage::disk("public")->delete($features->icon);
        $features->delete();
    }
    public function setGeneralID($id)
    {
        $this->dispatch('editGeneral', ['id' => $id]);
    }
    public function render()
    {
        return view('livewire.general-features.main',[
            'features'=> GeneralFeature::latest()->paginate(10),
        ]);
    }

}
