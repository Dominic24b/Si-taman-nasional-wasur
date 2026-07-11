@extends('layouts.admin')

@php($pageTitle = 'Edit Flora')

@section('content')
<form action="{{ route('admin.flora.update', $flora) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl border border-green-100 p-6 max-w-2xl space-y-5">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $flora->nama) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        @error('nama') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Latin</label>
        <input type="text" name="nama_latin" value="{{ old('nama_latin', $flora->nama_latin) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
        <select name="kategori" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
            @foreach ($kategoriOptions as $key => $label)
                <option value="{{ $key }}" @selected(old('kategori', $flora->kategori) === $key)>{{ $label }}</option>
            @endforeach
        </select>
    </div>

    <div class="flex items-center gap-2">
        <input type="checkbox" name="dilindungi" id="dilindungi" value="1" {{ old('dilindungi', $flora->dilindungi) ? 'checked' : '' }} class="rounded border-gray-300 text-green-600">
        <label for="dilindungi" class="text-sm text-gray-700">Spesies dilindungi</label>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
        <textarea name="deskripsi" rows="4" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">{{ old('deskripsi', $flora->deskripsi) }}</textarea>
        @error('deskripsi') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 space-y-3">
        @if ($flora->gambar)
            <div>
                <p class="text-sm text-gray-500 mb-2">Gambar saat ini:</p>
                <img src="{{ asset('storage/'.$flora->gambar) }}" class="w-32 h-32 object-cover rounded-lg border">
            </div>
        @endif

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-green-600 file:text-white file:shadow-md hover:file:bg-green-700 file:cursor-pointer cursor-pointer">
        </div>
    </div>

    <div class="flex gap-3">
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-5 py-2 rounded-lg">Perbarui</button>
        <a href="{{ route('admin.flora.index') }}" class="text-sm font-medium text-white bg-red-600 hover:bg-red-700 px-5 py-2 rounded-lg shadow-sm transition">Batal</a>
    </div>
</form>
@endsection