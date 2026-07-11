<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekowisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
        'fasilitas',
        'aksesibilitas',
        'urutan',
    ];

    protected $casts = [
        'fasilitas' => 'array',
    ];
}
