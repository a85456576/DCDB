<?php

namespace App\Livewire\AboutUs;

use App\Models\AboutUs;
use Livewire\Component;

class Main extends Component
{
    public $aboutUs, $vision, $innovation, $partnership, $excellence, $mission, $about;
    protected $rules = [
        'aboutUs' => 'required|string|max:8000',
        'vision' => 'required|string|max:8000',
        'innovation' => 'nullable|string|max:8000',
        'partnership' => 'nullable|string|max:8000',
        'excellence' => 'nullable|string|max:8000',
        'mission' => 'required|string|max:8000',
    ];



    public function aboutUs()
    {
        $this->about = AboutUs::find(1);
        $this->aboutUs = $this->about->about_us;
        $this->vision = $this->about->vision;
        $this->innovation = $this->about->innovation;
        $this->partnership = $this->about->partnership;
        $this->excellence = $this->about->excellence;
        $this->mission = $this->about->mission;
    }
    public function mount()
    {
        $this->aboutUs();
    }

    public function edit()
    {
        $this->validate();
        $this->about->update([
            "abou_us" => $this->aboutUs,
            "vision" => $this->vision,
            "innovation" => $this->innovation,
            "partnership" => $this->partnership,
            "excellence" => $this->excellence,
            "mission" => $this->mission,
        ]);
    }


    public function render()
    {
        return view('livewire.about-us.main',[
            'about'=> $this->about,
        ]);
    }

}
