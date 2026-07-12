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

{{-- TATA TERTIB & LARANGAN PENGUNJUNG --}}
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
    <div class="bg-red-50 border border-red-200 rounded-2xl p-6 sm:p-8">
        <h2 class="flex items-center gap-2 text-lg font-bold text-red-800 mb-2">🚫 Tata Tertib dan Larangan Pengunjung</h2>
        <p class="text-sm text-red-700 mb-6">
            Demi menjaga kelestarian ekosistem dan keselamatan bersama, setiap pengunjung Taman Nasional
            Wasur wajib mematuhi ketentuan berikut selama berada di dalam kawasan:
        </p>

        <div class="grid sm:grid-cols-2 gap-x-8 gap-y-3 text-sm">
            <div class="flex items-start gap-2">
                <span class="text-red-600 font-bold">✕</span>
                <p class="text-gray-700">Dilarang membawa dan menggunakan senjata api, senjata tajam, atau alat yang dapat membahayakan satwa liar.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-red-600 font-bold">✕</span>
                <p class="text-gray-700">Dilarang berburu, menangkap, melukai, atau membunuh satwa liar dalam bentuk apa pun.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-red-600 font-bold">✕</span>
                <p class="text-gray-700">Dilarang memetik, merusak, atau mengambil tumbuhan dan bagian tumbuhan tanpa izin resmi.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-red-600 font-bold">✕</span>
                <p class="text-gray-700">Dilarang membuang sampah sembarangan; bawa kembali sampah Anda keluar kawasan.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-red-600 font-bold">✕</span>
                <p class="text-gray-700">Dilarang menyalakan api unggun atau membakar apa pun di sembarang tempat.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-red-600 font-bold">✕</span>
                <p class="text-gray-700">Dilarang membawa hewan peliharaan ke dalam kawasan taman nasional.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-red-600 font-bold">✕</span>
                <p class="text-gray-700">Dilarang memberi makan satwa liar dalam bentuk apa pun.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-red-600 font-bold">✕</span>
                <p class="text-gray-700">Dilarang mencoret-coret, merusak, atau mengotori fasilitas kawasan.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-green-700 font-bold">✓</span>
                <p class="text-gray-700">Wajib mengikuti jalur/rute yang telah ditentukan dan tidak keluar dari area yang diizinkan.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-green-700 font-bold">✓</span>
                <p class="text-gray-700">Wajib didampingi pemandu atau petugas resmi untuk kegiatan di area tertentu.</p>
            </div>
        </div>

        <p class="text-xs text-red-600 mt-6 italic">
            Pelanggaran terhadap ketentuan di atas dapat dikenai sanksi sesuai peraturan perundang-undangan
            yang berlaku, termasuk UU No. 5 Tahun 1990 tentang Konservasi Sumber Daya Alam Hayati dan Ekosistemnya.
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