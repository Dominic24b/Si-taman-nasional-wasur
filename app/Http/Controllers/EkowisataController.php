<?php

namespace App\Http\Controllers;

use App\Models\Ekowisata;

class EkowisataController extends Controller
{
    public function index()
    {
        $ekowisatas = Ekowisata::orderBy('urutan')->orderBy('nama')->get();

        return view('ekowisata.index', compact('ekowisatas'));
    }
}
