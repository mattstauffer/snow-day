<?php

use App\Http\Controllers\BroadcastController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::controller(BroadcastController::class)->name('broadcasts.')->group(function () {
    Route::get('broadcasts/create', 'create')->name('create');
    Route::post('broadcasts', 'store')->name('store');

    Route::get('d/{broadcast}', 'show')->name('show');
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
