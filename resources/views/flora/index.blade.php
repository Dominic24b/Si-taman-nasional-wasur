@extends('layouts.app')

@php($title = 'Flora - TN Wasur Papua')

@section('content')
<section class="bg-gradient-to-br from-green-900 to-green-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h1 class="flex items-center gap-2 text-2xl sm:text-3xl font-bold mb-2">🌱 Flora Taman Nasional Wasur</h1>
        <p class="text-green-100">{{ $floras->count() }}+ spesies tumbuhan endemik — dari anggrek langka hingga mangrove penting kawasan</p>
    </div>
</section>

<div x-data="{ filter: 'semua' }">
    {{-- Filter bar --}}
    <div class="bg-white border-b sticky top-16 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center gap-2 overflow-x-auto">
            <button @click="filter = 'semua'"
                    :class="filter === 'semua' ? 'bg-green-500 text-white' : 'bg-white text-gray-600 border border-gray-300'"
                    class="px-4 py-1.5 rounded-full text-sm font-medium whitespace-nowrap transition">Semua</button>

            @foreach ($kategoriOptions as $key => $label)
                <button @click="filter = '{{ $key }}'"
                        :class="filter === '{{ $key }}' ? 'bg-green-500 text-white' : 'bg-white text-gray-600 border border-gray-300'"
                        class="px-4 py-1.5 rounded-full text-sm font-medium whitespace-nowrap transition">{{ $label }}</button>
            @endforeach

            <button @click="filter = 'dilindungi'"
                    :class="filter === 'dilindungi' ? 'bg-green-500 text-white' : 'bg-white text-gray-600 border border-gray-300'"
                    class="px-4 py-1.5 rounded-full text-sm font-medium whitespace-nowrap transition">Dilindungi</button>

            <span class="ml-auto text-sm text-gray-400 whitespace-nowrap">{{ $floras->count() }} spesies</span>
        </div>
    </div>

    {{-- Grid kartu --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($floras as $flora)
                <div x-show="filter === 'semua' || filter === '{{ $flora->kategori }}' || (filter === 'dilindungi' && {{ $flora->dilindungi ? 'true' : 'false' }})"
                     class="bg-white rounded-xl shadow-sm border border-green-100 overflow-hidden hover:shadow-md transition">
                    <div class="h-40 bg-green-50 flex items-center justify-center text-5xl">
                        @if ($flora->gambar)
                            <img src="{{ asset('storage/'.$flora->gambar) }}" alt="{{ $flora->nama }}" class="w-full h-full object-cover">
                        @else
                            🌸
                        @endif
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-800">{{ $flora->nama }}</h3>
                        @if ($flora->nama_latin)
                            <p class="italic text-gray-400 text-sm mb-2">{{ $flora->nama_latin }}</p>
                        @endif
                        <div class="flex gap-2 mb-3">
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded-full">{{ $flora->labelKategori() }}</span>
                            @if ($flora->dilindungi)
                                <span class="text-xs bg-red-600 text-white px-2 py-0.5 rounded-full">Dilindungi</span>
                            @endif
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed">{{ $flora->deskripsi }}</p>
                    </div>
                </div>
            @empty
                <p class="text-gray-400 col-span-full text-center py-10">Belum ada data flora. Silakan tambahkan lewat panel admin.</p>
            @endforelse
        </div>
    </section>
</div>
@endsection
