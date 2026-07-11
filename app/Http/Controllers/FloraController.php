<?php

namespace App\Http\Controllers;

use App\Models\Flora;

class FloraController extends Controller
{
    public function index()
    {
        $floras = Flora::orderBy('nama')->get();
        $kategoriOptions = Flora::kategoriOptions();

        return view('flora.index', compact('floras', 'kategoriOptions'));
    }
}
