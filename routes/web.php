<?php

// use App\Models\CustomerExperience;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Livewire\Companies\Main as CompaniesController;
use App\Livewire\Documents\Main as DocumentsController;
use App\Livewire\Supervisors\Main as SupervisorsController;

Route::middleware(['auth'])->group(function () { //prefix('dashboard')->
    Route::get('/', CompaniesController::class)->name('companies');
    Route::get('/supervisors', SupervisorsController::class)->name('supervisors');
    Route::get('/docs', DocumentsController::class)->name('docs');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return  "cleared done successfully";
});

require __DIR__ . '/auth.php';
