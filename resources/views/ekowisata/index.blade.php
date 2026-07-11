@extends('layouts.app')

@php($title = 'Ekowisata - TN Wasur Papua')

@section('content')
<section class="bg-gradient-to-br from-green-900 to-green-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h1 class="flex items-center gap-2 text-2xl sm:text-3xl font-bold mb-2">🖼️ Destinasi Ekowisata Taman Nasional Wasur</h1>
        <p class="text-green-100">{{ $ekowisatas->count() }} destinasi alam menakjubkan di kawasan konservasi terpenting Papua</p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($ekowisatas as $wisata)
            <div class="bg-white rounded-xl shadow-sm border border-green-100 overflow-hidden hover:shadow-md transition">
                <div class="h-44 bg-gradient-to-br from-green-700 to-green-500 flex items-end p-4">
                    @if ($wisata->gambar)
                        <img src="{{ asset('storage/'.$wisata->gambar) }}" alt="{{ $wisata->nama }}" class="absolute inset-0 w-full h-44 object-cover">
                    @endif
                    <span class="relative text-white text-2xl font-bold drop-shadow">{{ $wisata->nama }}</span>
                </div>
                <div class="p-5">
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">{{ $wisata->deskripsi }}</p>

                    @if (!empty($wisata->fasilitas))
                        <div class="flex flex-wrap gap-2 mb-3">
                            @foreach ($wisata->fasilitas as $fasilitas)
                                <span class="text-xs bg-green-50 text-green-700 border border-green-100 px-2.5 py-1 rounded-full">{{ $fasilitas }}</span>
                            @endforeach
                        </div>
                    @endif

                    @if ($wisata->aksesibilitas)
                        <p class="text-xs text-gray-400 flex items-center gap-1">📍 {{ $wisata->aksesibilitas }}</p>
                    @endif
                </div>
            </div>
        @empty
            <p class="text-gray-400 col-span-full text-center py-10">Belum ada data destinasi ekowisata. Silakan tambahkan lewat panel admin.</p>
        @endforelse
    </div>
</section>
@endsection
