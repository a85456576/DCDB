<?php

// use App\Models\CustomerExperience;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Livewire\News\Main as NewsController;
use App\Livewire\AboutUs\Main as AboutUsController;
use App\Livewire\Comments\Main as CommentsController;
use App\Livewire\Packages\Main as PackagesController;
use App\Livewire\Services\Main as ServicesController;
use App\Livewire\Services\Details\Main as ServicesDetailsController;
use App\Livewire\AboutSite\Main as AboutSiteController;
use App\Livewire\ContactUs\Main as ContactUsController;
use App\Livewire\Subscribes\Main as SubscribesController;
use App\Livewire\Supervisors\Main as SupervisorsController;
// use App\Livewire\CustomerExperience\Main as CustomerExperienceController;
use App\Livewire\CustomerExperiences\Main as CustomerExperiencController;
use App\Livewire\GeneralFeatures\Main as GeneralFeaturesController;

Route::middleware(['auth'])->group(function () { //prefix('dashboard')->

    // Statistics Routes
    // Route::get('statistics', [StatisticsController::class, 'index']);

    Route::get('/', SupervisorsController::class)->name('supervisors');
    Route::get('/services', ServicesController::class)->name('services');
    Route::get('/services/details', ServicesDetailsController::class)->name('services.details');
    Route::get('/packages', PackagesController::class)->name('packages');
    Route::get('/news', NewsController::class)->name('news');
    Route::get('/customer/experiences', CustomerExperiencController::class)->name('customer.experience');
    Route::get('/general/features', GeneralFeaturesController::class)->name('general.features');
    Route::get('/comments', CommentsController::class)->name('comments');
    Route::get('/subscribes', SubscribesController::class)->name('subscribes');
    Route::get('/about/site', AboutSiteController::class)->name('about.site');
    Route::get('/about/us', AboutUsController::class)->name('about.us');
    Route::get('/contact/us', ContactUsController::class)->name('contact.us');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return  "cleared done successfully";
});

require __DIR__ . '/auth.php';
