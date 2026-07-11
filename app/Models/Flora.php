<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flora extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nama_latin',
        'kategori',
        'dilindungi',
        'deskripsi',
        'gambar',
    ];

    protected $casts = [
        'dilindungi' => 'boolean',
    ];

    public static function kategoriOptions(): array
    {
        return [
            'anggrek' => 'Anggrek',
            'pohon' => 'Pohon',
            'palem' => 'Palem',
            'mangrove' => 'Mangrove',
            'lainnya' => 'Lainnya',
        ];
    }

    public function labelKategori(): string
    {
        return self::kategoriOptions()[$this->kategori] ?? $this->kategori;
    }
}
