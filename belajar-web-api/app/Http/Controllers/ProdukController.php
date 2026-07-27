<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; 

class ProdukController extends Controller
{
    public function index()
    {
        
        $semua_produk = Produk::all(); 
        
        return view('produk', compact('semua_produk'));
    }
}
