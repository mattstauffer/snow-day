<?php

use App\Http\Controllers\SnowDayController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::controller(SnowDayController::class)->name('snow-days.')->group(function () {
    Route::get('snow-days/create', 'create')->name('create');
    Route::post('snow-days', 'store')->name('store');

    Route::get('d/{snowDay}', 'show')->name('show');
});

/*
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
*/

require __DIR__.'/auth.php';
