@extends('layouts.app')

@php($title = 'Tentang - TN Wasur Papua')

@section('content')
<section class="bg-gradient-to-br from-green-900 to-green-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <h1 class="text-3xl sm:text-4xl font-bold mb-4">Tentang Taman Nasional Wasur</h1>
        <p class="max-w-3xl text-green-100 leading-relaxed">
            Situs ini dikembangkan untuk memperkenalkan keanekaragaman hayati dan potensi ekowisata
            Taman Nasional Wasur kepada masyarakat luas, sekaligus menjadi media edukasi konservasi
            alam Papua Selatan.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-green-50 border border-green-100 rounded-2xl p-6 sm:p-8">
        <h2 class="flex items-center gap-2 text-lg font-bold text-green-900 mb-6">📞 Informasi dan Kontak</h2>

        <div class="space-y-5 text-sm">
            <div class="flex items-start gap-3">
                <span class="text-xl">🏢</span>
                <div>
                    <p class="font-semibold text-gray-800">Balai Taman Nasional Wasur</p>
                    <p class="text-gray-500">JL Garuda Leproseri No.03, Rimba Jaya, Kec. Merauke, Kabupaten Merauke, Papua Selatan 99611</p>
                </div>
            </div>

            <div class="flex items-start gap-3">
                <span class="text-xl">🌐</span>
                <p class="text-gray-500">WEBSITE SISTEM INFORMASI SISTEM  INFORMASI KEANEKARAGAMAN HAYATI DAN DAYA TARIK EKOWISATA DI TAMAN NASIONAL WASUR PAPUA SELATAN </p>
            </div>

            <div class="flex items-start gap-3">
                <span class="text-xl">🎓</span>
                <p class="text-gray-500">
                    Website ini dikembangkan sebagai Proyek Akhir Program Studi D3 Teknik Informatika Politeknik Elektronika Negeri Surabaya.
                </p>
            </div>
            <div class="flex items-start gap-3">
                <span class="text-xl">👤</span>
                <div>
                    <p class="font-semibold text-gray-800">Kontak Person</p>
                    <p class="text-gray-500">Dominikus Kawangdem | Mahasiswa D3 PENS</p>
                    <p class="text-gray-500">+62 823-1856-0441</p>
                </div>
            </div>
             {{-- Peta lokasi --}}
        <div class="mt-8">
            <h3 class="flex items-center gap-2 text-sm font-semibold text-green-900 mb-3">🗺️ Lokasi Balai Taman Nasional Wasur</h3>
            <div class="rounded-xl overflow-hidden border border-green-100">
                <iframe
                    src="https://www.google.com/maps?q=-8.5407063,140.4397177&hl=id&z=15&output=embed"
                    width="100%"
                    height="320"
                    style="border:0;"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Peta Lokasi Balai Taman Nasional Wasur">
                </iframe>
            </div>
        </div>
    </div>
</section>
@endsection