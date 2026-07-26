<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Kita siapkan data artikel (contoh data dari logika PHP)
        $judul = "Selamat Datang di Blog Saya";
        $artikel = [
            "Belajar Dasar Route dan View di Laravel",
            "Memahami Fungsi Controller untuk Pemula",
            "Membuat Database Menggunakan Migration"
        ];

        // Kirim data $judul dan $artikel ke file view 'blog'
        return view('blog', compact('judul', 'artikel'));
    }
}