<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekowisata;
use App\Models\Fauna;
use App\Models\Flora;

class DashboardController extends Controller
{
    public function index()
    {
        $totalFlora = Flora::count();
        $totalFauna = Fauna::count();
        $totalEkowisata = Ekowisata::count();
        $floraDilindungi = Flora::where('dilindungi', true)->count();
        $faunaDilindungi = Fauna::where('dilindungi', true)->count();

        // Data untuk grafik jumlah per kategori
        $floraPerKategori = Flora::selectRaw('kategori, count(*) as jumlah')
            ->groupBy('kategori')
            ->pluck('jumlah', 'kategori');

        $faunaPerKategori = Fauna::selectRaw('kategori, count(*) as jumlah')
            ->groupBy('kategori')
            ->pluck('jumlah', 'kategori');

        $kategoriLabelFlora = Flora::kategoriOptions();
        $kategoriLabelFauna = Fauna::kategoriOptions();

        // Data untuk grafik status dilindungi vs tidak
        $statusDilindungi = [
            'Dilindungi' => $floraDilindungi + $faunaDilindungi,
            'Tidak Dilindungi' => ($totalFlora + $totalFauna) - ($floraDilindungi + $faunaDilindungi),
        ];

        return view('admin.dashboard', compact(
            'totalFlora',
            'totalFauna',
            'totalEkowisata',
            'floraDilindungi',
            'faunaDilindungi',
            'floraPerKategori',
            'faunaPerKategori',
            'kategoriLabelFlora',
            'kategoriLabelFauna',
            'statusDilindungi'
        ));
    }
}