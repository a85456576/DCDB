<?php

namespace App\Livewire\AboutSite;

use App\Models\AboutSite;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Main extends Component
{
    use LivewireAlert;

    public $siteInfo;

    #[Validate('required|string|max:255')]
    public $physicalLocation;

    #[Validate('required|string|max:1000')]
    public $mapLocation;

    #[Validate('required|string|min:10|max:11')]
    public $phone;

    #[Validate('required|string|max:40')]
    public $email;

    #[Validate('required|string|max:255')]
    public $facebook;

    #[Validate('required|string|max:255')]
    public $instagram;

    #[Validate('required|string|max:255')]
    public $linkdin;

    #[Validate('required|string|max:255')]
    public $youtube;

    #[Validate('required|numeric')]
    public $studentsNum;

    #[Validate('required|numeric')]
    public $coursesNum;

    #[Validate('required|numeric')]
    public $roomsNum;

    public function aboutSite()
    {
        $this->siteInfo = AboutSite::find(1);
        $this->physicalLocation = $this->siteInfo->physical_location;
        $this->mapLocation = $this->siteInfo->map_location;
        $this->phone = $this->siteInfo->phone;
        $this->email = $this->siteInfo->email;
        $this->facebook = $this->siteInfo->facebook;
        $this->instagram = $this->siteInfo->instagram;
        $this->linkdin = $this->siteInfo->linkdin;
        $this->youtube = $this->siteInfo->youtube;
        $this->studentsNum = $this->siteInfo->students_num;
        $this->coursesNum = $this->siteInfo->courses_num;
        $this->roomsNum = $this->siteInfo->rooms_num;
    }
    public function mount()
    {
        $this->aboutSite();
    }

    public function render()
    {
        return view('livewire.about-site.main');
    }

    public function edit()
    {
        $this->siteInfo->update([
            'physical_location' => $this->physicalLocation,
            'map_location' => $this->mapLocation,
            'phone' => $this->phone,
            'email' => $this->email,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'linkdin' => $this->linkdin,
            'youtube' => $this->youtube,
            'students_num' => $this->studentsNum,
            'courses_num' => $this->coursesNum,
            'rooms_num' => $this->roomsNum,
        ]);

        $this->aboutSite();
        $this->alert('success', 'تم تعديل المعلومات بنجاح', [
            'position' => 'top-start',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => false,
        ]);
    }
}
