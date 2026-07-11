@extends('layouts.admin')

@php($pageTitle = 'Tambah Ekowisata')

@section('content')
<form action="{{ route('admin.ekowisata.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl border border-green-100 p-6 max-w-2xl space-y-5">
    @csrf

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Destinasi</label>
        <input type="text" name="nama" value="{{ old('nama') }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        @error('nama') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
        <textarea name="deskripsi" rows="4" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">{{ old('deskripsi') }}</textarea>
        @error('deskripsi') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Fasilitas <span class="text-gray-400 font-normal">(pisahkan dengan koma)</span></label>
        <input type="text" name="fasilitas" placeholder="Fotografi Alam, Birdwatching, Piknik" value="{{ old('fasilitas') }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Aksesibilitas</label>
            <input type="text" name="aksesibilitas" placeholder="15 km dari Kota Merauke" value="{{ old('aksesibilitas') }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Urutan Tampil</label>
            <input type="number" name="urutan" min="0" value="{{ old('urutan', 0) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>
    </div>

    <div class="bg-gray-50 border border-gray-200 rounded-xl p-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Gambar</label>
        <input type="file" name="gambar" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-green-600 file:text-white file:shadow-md hover:file:bg-green-700 file:cursor-pointer cursor-pointer">
    </div>

    <div class="flex gap-3">
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-5 py-2 rounded-lg">Simpan</button>
        <a href="{{ route('admin.ekowisata.index') }}" class="text-sm font-medium text-white bg-red-600 hover:bg-red-700 px-5 py-2 rounded-lg shadow-sm transition">Batal</a>
    </div>
</form>
@endsection