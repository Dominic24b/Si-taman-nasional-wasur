<?php

namespace App\Http\Controllers;

use App\Models\Fauna;

class FaunaController extends Controller
{
    public function index()
    {
        $faunas = Fauna::orderBy('nama')->get();
        $kategoriOptions = Fauna::kategoriOptions();

        return view('fauna.index', compact('faunas', 'kategoriOptions'));
    }
}
