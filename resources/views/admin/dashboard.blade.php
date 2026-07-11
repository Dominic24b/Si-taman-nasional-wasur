@extends('layouts.admin')

@php($pageTitle = 'Dashboard')

@section('content')
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-xl border border-green-100 p-5">
        <p class="text-3xl font-bold text-green-900">{{ $totalFlora }}</p>
        <p class="text-sm text-gray-500">Total Data Flora</p>
    </div>
    <div class="bg-white rounded-xl border border-green-100 p-5">
        <p class="text-3xl font-bold text-green-900">{{ $totalFauna }}</p>
        <p class="text-sm text-gray-500">Total Data Fauna</p>
    </div>
    <div class="bg-white rounded-xl border border-green-100 p-5">
        <p class="text-3xl font-bold text-green-900">{{ $totalEkowisata }}</p>
        <p class="text-sm text-gray-500">Destinasi Ekowisata</p>
    </div>
    <div class="bg-white rounded-xl border border-green-100 p-5">
        <p class="text-3xl font-bold text-red-600">{{ $floraDilindungi + $faunaDilindungi }}</p>
        <p class="text-sm text-gray-500">Spesies Dilindungi</p>
    </div>
</div>

<div class="grid lg:grid-cols-3 gap-4">
    <div class="bg-white rounded-xl border border-green-100 p-5 lg:col-span-1">
        <p class="text-sm font-semibold text-green-900 mb-4">Status Konservasi</p>
        <canvas id="chartDilindungi" height="220"></canvas>
    </div>
    <div class="bg-white rounded-xl border border-green-100 p-5 lg:col-span-1">
        <p class="text-sm font-semibold text-green-900 mb-4">Flora per Kategori</p>
        <canvas id="chartFlora" height="220"></canvas>
    </div>
    <div class="bg-white rounded-xl border border-green-100 p-5 lg:col-span-1">
        <p class="text-sm font-semibold text-green-900 mb-4">Fauna per Kategori</p>
        <canvas id="chartFauna" height="220"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
<script>
    const hijau = ['#166534', '#16a34a', '#22c55e', '#4ade80', '#86efac', '#bbf7d0'];

    new Chart(document.getElementById('chartDilindungi'), {
        type: 'doughnut',
        data: {
            labels: {!! json_encode(array_keys($statusDilindungi)) !!},
            datasets: [{
                data: {!! json_encode(array_values($statusDilindungi)) !!},
                backgroundColor: ['#dc2626', '#16a34a'],
                borderWidth: 0,
            }],
        },
        options: {
            plugins: { legend: { position: 'bottom', labels: { boxWidth: 12, font: { size: 11 } } } },
        },
    });

    new Chart(document.getElementById('chartFlora'), {
        type: 'bar',
        data: {
            labels: {!! json_encode(array_values($kategoriLabelFlora)) !!},
            datasets: [{
                label: 'Jumlah',
                data: {!! json_encode(collect($kategoriLabelFlora)->keys()->map(fn($k) => $floraPerKategori[$k] ?? 0)->values()) !!},
                backgroundColor: hijau,
                borderRadius: 6,
            }],
        },
        options: {
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, ticks: { precision: 0 } } },
        },
    });

    new Chart(document.getElementById('chartFauna'), {
        type: 'bar',
        data: {
            labels: {!! json_encode(array_values($kategoriLabelFauna)) !!},
            datasets: [{
                label: 'Jumlah',
                data: {!! json_encode(collect($kategoriLabelFauna)->keys()->map(fn($k) => $faunaPerKategori[$k] ?? 0)->values()) !!},
                backgroundColor: hijau,
                borderRadius: 6,
            }],
        },
        options: {
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, ticks: { precision: 0 } } },
        },
    });
</script>
@endsection