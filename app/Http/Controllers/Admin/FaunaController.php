<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fauna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaunaController extends Controller
{
    public function index()
    {
        $faunas = Fauna::orderBy('nama')->paginate(10);

        return view('admin.fauna.index', compact('faunas'));
    }

    public function create()
    {
        $kategoriOptions = Fauna::kategoriOptions();
        $statusOptions = Fauna::statusOptions();

        return view('admin.fauna.create', compact('kategoriOptions', 'statusOptions'));
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('fauna', 'public');
        }

        Fauna::create($data);

        return redirect()->route('admin.fauna.index')->with('status', 'Data fauna berhasil ditambahkan.');
    }

    public function edit(Fauna $fauna)
    {
        $kategoriOptions = Fauna::kategoriOptions();
        $statusOptions = Fauna::statusOptions();

        return view('admin.fauna.edit', compact('fauna', 'kategoriOptions', 'statusOptions'));
    }

    public function update(Request $request, Fauna $fauna)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('gambar')) {
            if ($fauna->gambar) {
                Storage::disk('public')->delete($fauna->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('fauna', 'public');
        }

        $fauna->update($data);

        return redirect()->route('admin.fauna.index')->with('status', 'Data fauna berhasil diperbarui.');
    }

    public function destroy(Fauna $fauna)
    {
        if ($fauna->gambar) {
            Storage::disk('public')->delete($fauna->gambar);
        }
        $fauna->delete();

        return redirect()->route('admin.fauna.index')->with('status', 'Data fauna berhasil dihapus.');
    }

    private function validateData(Request $request): array
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nama_latin' => 'nullable|string|max:255',
            'kategori' => 'required|in:burung,mamalia,reptil,ikan,lainnya',
            'status_konservasi' => 'nullable|in:LC,NT,VU,EN,CR',
            'dilindungi' => 'nullable|boolean',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $validated['dilindungi'] = $request->boolean('dilindungi');

        return $validated;
    }
}
