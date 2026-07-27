<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/tentang', function () {
    return view('tentang');
});
use App\Http\Controllers\BlogController;

Route::get('/blog', [BlogController::class, 'index']);


use App\Http\Controllers\ProdukController;

Route::get('/produk', [ProdukController::class, 'index'])
    ->middleware('auth');