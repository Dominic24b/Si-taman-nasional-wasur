<?php

namespace App\Http\Controllers;

use App\Models\Ekowisata;
use App\Models\Fauna;
use App\Models\Flora;

class HomeController extends Controller
{
    public function beranda()
    {
        $stats = [
            'luas_kawasan'    => '413.810',
            'tahun_ramsar'    => '1996',
            'spesies_flora'   => max(Flora::count(), 150),
            'spesies_burung'  => max(Fauna::where('kategori', 'burung')->count() * 40, 400),
            'spesies_mamalia' => max(Fauna::where('kategori', 'mamalia')->count() * 40, 80),
            'spesies_reptil'  => max(Fauna::where('kategori', 'reptil')->count() * 30, 60),
        ];

        $ekosistem = [
            ['icon' => '🌾', 'nama' => 'Savana', 'deskripsi' => 'Padang rumput luas habitat rusa dan walabi.'],
            ['icon' => '🌳', 'nama' => 'Hutan Monsun', 'deskripsi' => 'Hutan musim yang meranggas di musim kemarau.'],
            ['icon' => '💧', 'nama' => 'Rawa & Danau', 'deskripsi' => 'Lahan basah air tawar kaya keanekaragaman hayati.'],
            ['icon' => '🌿', 'nama' => 'Hutan Mangrove', 'deskripsi' => 'Ekosistem pesisir penahan abrasi dan pembibitan ikan.'],
            ['icon' => '🏖️', 'nama' => 'Pesisir Pantai', 'deskripsi' => 'Garis pantai berbatasan langsung dengan Laut Arafura.'],
        ];

        return view('home.beranda', compact('stats', 'ekosistem'));
    }

    public function tentang()
    {
        return view('home.tentang');
    }
}
