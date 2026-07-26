<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            
            // Tambahkan 3 baris kolom ini:
            $table->string('nama_produk');          // Kolom untuk nama barang
            $table->integer('harga');               // Kolom untuk harga barang
            $table->text('deskripsi')->nullable();   // Kolom deskripsi (boleh kosong)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
