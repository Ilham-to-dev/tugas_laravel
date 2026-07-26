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

use App\Models\Produk;

Route::get('/produk', function () {
    // Ambil semua data dari tabel produks
    $semua_produk = Produk::all(); 
    
    // Kirim data ke file view bernama 'produk.blade.php'
    return view('produk', compact('semua_produk'));
});
