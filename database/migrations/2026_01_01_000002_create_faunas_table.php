<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('faunas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_latin')->nullable();
            $table->enum('kategori', ['burung', 'mamalia', 'reptil', 'ikan', 'lainnya'])->default('lainnya');
            $table->enum('status_konservasi', ['LC', 'NT', 'VU', 'EN', 'CR'])->nullable();
            $table->boolean('dilindungi')->default(false);
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faunas');
    }
};
