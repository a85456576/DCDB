<?php

// use App\Models\CustomerExperience;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Livewire\Companies\Main as CompaniesController;
use App\Livewire\Documents\Main as DocumentsController;
use App\Livewire\Documents\Details\Main as DocumentsDetailsController;
use App\Livewire\Supervisors\Main as SupervisorsController;

Route::middleware(['auth'])->group(function () { //prefix('dashboard')->

    // Statistics Routes
    // Route::get('statistics', [StatisticsController::class, 'index']);

    Route::get('/', SupervisorsController::class)->name('supervisors');
    Route::get('/docs', DocumentsController::class)->name('docs');
    Route::get('/docs/details', DocumentsDetailsController::class)->name('docs.details');
    Route::get('/companies', CompaniesController::class)->name('companies');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return  "cleared done successfully";
});

require __DIR__ . '/auth.php';
