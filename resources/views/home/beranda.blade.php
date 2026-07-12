@extends('layouts.app')

@php($title = 'Beranda - TN Wasur Papua')

@section('content')
{{-- HERO --}}
<section class="bg-gradient-to-br from-green-900 to-green-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h1 class="text-3xl sm:text-4xl font-bold mb-4">Taman Nasional Wasur Papua Selatan</h1>
        <p class="max-w-3xl text-green-100 leading-relaxed text-justify mb-8">
            Sebelumnya kawasan Taman Nasional Wasur merupakan wilayah Suaka Alam yang ditetapkan melalui Surat Keputusan Menteri Pertanian No. 252/Kpts/Um/5/1978 tanggal 2 Mei 1978 yang terdiri dua kawasan konservasi, yaitu Suaka Margasatwa Wasur dan Cagar Alam Rawa Biru.
            Suaka Margasatwa Wasur ditujukan sebagai lokasi perlindungan satwa, sedangkan Cagar Alam Rawa Biru sebagai lokasi pelindung sumber air minum penduduk Merauke. Tidak lama kemudian kawasan seluas masing-masing 206.000 ha dan 4.000 ha tersebut diusulkan untuk ditambah sebanyak 15.000 ha, sehingga menjadi 225.000 ha.
            Perluasan tersebut diusulkan melalui surat No. 1125/DJ/I/1981 tanggal 10 Maret 1981 oleh Gubernur Provinsi Irian Jaya. Tahun selanjutnya berdasarkan Surat Keputusan Menteri Pertanian No. 15/Kpts/Um/5/1982 tanggal 4 Januari 1982 kawasan ini ditambah seluas 98.000 ha dan menjadi 323.000 ha.
            Selanjutnya berdasarkan Surat Keputusan Menteri Kehutanan No. 448/Menhut-VI/1990 tanggal 6 Maret 1990 kawasan ini dideklarasikan sebagai Taman Nasional Wasur seluas 308.000 ha. Kemudian pada Tanggal 25  Mei  1997 ditunjuk sebagai kawasan Taman Nasional Wasur / Wasur National Park di Kabupaten Merauke, Provinsi Irian Jaya, dengan luas 413.810 ha.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-green-700/60 rounded-xl p-4">
                <p class="text-2xl font-bold">{{ $stats['luas_kawasan'] }}</p>
                <p class="text-sm text-green-100">Hektar Luas Kawasan</p>
            </div>
            <div class="bg-green-700/60 rounded-xl p-4">
                <p class="text-2xl font-bold">{{ $stats['tahun_ramsar'] }}</p>
                <p class="text-sm text-green-100">Ditetapkan Situs Ramsar</p>
            </div>
            <div class="bg-green-700/60 rounded-xl p-4">
                <p class="text-2xl font-bold">{{ $stats['spesies_flora'] }}+</p>
                <p class="text-sm text-green-100">Spesies Flora</p>
            </div>
            <div class="bg-green-700/60 rounded-xl p-4">
                <p class="text-2xl font-bold">{{ $stats['spesies_burung'] }}+</p>
                <p class="text-sm text-green-100">Spesies Burung</p>
            </div>
            <div class="bg-green-700/60 rounded-xl p-4">
                <p class="text-2xl font-bold">{{ $stats['spesies_mamalia'] }}+</p>
                <p class="text-sm text-green-100">Spesies Mamalia</p>
            </div>
            <div class="bg-green-700/60 rounded-xl p-4">
                <p class="text-2xl font-bold">{{ $stats['spesies_reptil'] }}+</p>
                <p class="text-sm text-green-100">Spesies Reptil</p>
            </div>
        </div>
    </div>
</section>

{{-- LOKASI & EKOSISTEM --}}
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-10">
        <h2 class="flex items-center gap-2 text-xl font-bold text-green-900 mb-3">📍 Lokasi</h2>
        <div class="grid lg:grid-cols-2 gap-6 items-start">
            <p class="text-gray-600 leading-relaxed">
                Taman Nasional Wasur terletak di Kabupaten Merauke, Provinsi Papua Selatan, Indonesia.
                Kawasan ini berbatasan langsung dengan Papua Nugini (PNG) di bagian timur, menjadikannya
                kawasan konservasi lintas batas yang penting dalam konteks regional Asia-Pasifik.
            </p>
            <div class="rounded-xl overflow-hidden border border-green-100">
                <iframe
                    src="https://www.google.com/maps?q=-8.6006357,140.8336815&hl=id&z=11&output=embed"
                    width="100%"
                    height="280"
                    style="border:0;"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Peta Lokasi Taman Nasional Wasur">
                </iframe>
            </div>
        </div>
    </div>

    <div>
        <h2 class="flex items-center gap-2 text-xl font-bold text-green-900 mb-3">🌿 Tipe Ekosistem</h2>
        <p class="text-gray-600 leading-relaxed max-w-3xl mb-6">
            Kawasan ini memiliki lima tipe ekosistem utama yang saling mendukung dan membentuk lanskap yang sangat unik:
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
            @foreach ($ekosistem as $item)
                <div class="bg-green-50 border border-green-100 rounded-xl p-4 text-center hover:shadow-md transition">
                    <div class="text-3xl mb-2">{{ $item['icon'] }}</div>
                    <p class="font-semibold text-green-900 text-sm mb-1">{{ $item['nama'] }}</p>
                    <p class="text-xs text-gray-500">{{ $item['deskripsi'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection