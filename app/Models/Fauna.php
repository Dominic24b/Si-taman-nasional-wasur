<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fauna extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nama_latin',
        'kategori',
        'status_konservasi',
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
            'burung' => 'Burung',
            'mamalia' => 'Mamalia',
            'reptil' => 'Reptil',
            'ikan' => 'Ikan',
            'lainnya' => 'Lainnya',
        ];
    }

    public static function statusOptions(): array
    {
        return [
            'LC' => 'Risiko Rendah (LC)',
            'NT' => 'Hampir Terancam (NT)',
            'VU' => 'Rentan (VU)',
            'EN' => 'Terancam (EN)',
            'CR' => 'Kritis (CR)',
        ];
    }

    public function labelKategori(): string
    {
        return self::kategoriOptions()[$this->kategori] ?? $this->kategori;
    }
}
