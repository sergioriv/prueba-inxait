<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->name('profile');

    Route::get('export', [CustomerController::class, 'export'])->name('customers.export');
});


require __DIR__.'/auth.php';
