<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FloraController extends Controller
{
    public function index()
    {
        $floras = Flora::orderBy('nama')->paginate(10);

        return view('admin.flora.index', compact('floras'));
    }

    public function create()
    {
        $kategoriOptions = Flora::kategoriOptions();

        return view('admin.flora.create', compact('kategoriOptions'));
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('flora', 'public');
        }

        Flora::create($data);

        return redirect()->route('admin.flora.index')->with('status', 'Data flora berhasil ditambahkan.');
    }

    public function edit(Flora $flora)
    {
        $kategoriOptions = Flora::kategoriOptions();

        return view('admin.flora.edit', compact('flora', 'kategoriOptions'));
    }

    public function update(Request $request, Flora $flora)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('gambar')) {
            if ($flora->gambar) {
                Storage::disk('public')->delete($flora->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('flora', 'public');
        }

        $flora->update($data);

        return redirect()->route('admin.flora.index')->with('status', 'Data flora berhasil diperbarui.');
    }

    public function destroy(Flora $flora)
    {
        if ($flora->gambar) {
            Storage::disk('public')->delete($flora->gambar);
        }
        $flora->delete();

        return redirect()->route('admin.flora.index')->with('status', 'Data flora berhasil dihapus.');
    }

    private function validateData(Request $request): array
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nama_latin' => 'nullable|string|max:255',
            'kategori' => 'required|in:anggrek,pohon,palem,mangrove,lainnya',
            'dilindungi' => 'nullable|boolean',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $validated['dilindungi'] = $request->boolean('dilindungi');

        return $validated;
    }
}
