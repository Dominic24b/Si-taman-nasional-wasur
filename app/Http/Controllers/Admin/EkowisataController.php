<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekowisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkowisataController extends Controller
{
    public function index()
    {
        $ekowisatas = Ekowisata::orderBy('urutan')->paginate(10);

        return view('admin.ekowisata.index', compact('ekowisatas'));
    }

    public function create()
    {
        return view('admin.ekowisata.create');
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('ekowisata', 'public');
        }

        Ekowisata::create($data);

        return redirect()->route('admin.ekowisata.index')->with('status', 'Data ekowisata berhasil ditambahkan.');
    }

    public function edit(Ekowisata $ekowisata)
    {
        return view('admin.ekowisata.edit', compact('ekowisata'));
    }

    public function update(Request $request, Ekowisata $ekowisata)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('gambar')) {
            if ($ekowisata->gambar) {
                Storage::disk('public')->delete($ekowisata->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('ekowisata', 'public');
        }

        $ekowisata->update($data);

        return redirect()->route('admin.ekowisata.index')->with('status', 'Data ekowisata berhasil diperbarui.');
    }

    public function destroy(Ekowisata $ekowisata)
    {
        if ($ekowisata->gambar) {
            Storage::disk('public')->delete($ekowisata->gambar);
        }
        $ekowisata->delete();

        return redirect()->route('admin.ekowisata.index')->with('status', 'Data ekowisata berhasil dihapus.');
    }

    private function validateData(Request $request): array
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
            'fasilitas' => 'nullable|string',
            'aksesibilitas' => 'nullable|string|max:255',
            'urutan' => 'nullable|integer|min:0',
        ]);

        $validated['fasilitas'] = $request->filled('fasilitas')
            ? array_map('trim', explode(',', $validated['fasilitas']))
            : [];
        $validated['urutan'] = $validated['urutan'] ?? 0;

        return $validated;
    }
}
