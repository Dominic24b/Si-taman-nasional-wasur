@extends('layouts.admin')

@php($pageTitle = 'Data Fauna')

@section('content')
<div class="flex justify-between items-center mb-4">
    <p class="text-sm text-gray-500">{{ $faunas->total() }} spesies fauna terdaftar</p>
    <a href="{{ route('admin.fauna.create') }}" class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-4 py-2 rounded-lg">+ Tambah Fauna</a>
</div>

<div class="bg-white rounded-xl border border-green-100 overflow-x-auto">
    <table class="w-full text-sm">
        <thead class="bg-green-50 text-green-900">
            <tr>
                <th class="text-left px-4 py-3">Nama</th>
                <th class="text-left px-4 py-3">Kategori</th>
                <th class="text-left px-4 py-3">Status</th>
                <th class="text-right px-4 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @forelse ($faunas as $fauna)
                <tr>
                    <td class="px-4 py-3">
                        <p class="font-medium text-gray-800">{{ $fauna->nama }}</p>
                        @if ($fauna->nama_latin)
                            <p class="italic text-xs text-gray-400">{{ $fauna->nama_latin }}</p>
                        @endif
                    </td>
                    <td class="px-4 py-3">{{ $fauna->labelKategori() }}</td>
                    <td class="px-4 py-3 space-x-1">
                        @if ($fauna->dilindungi)
                            <span class="text-xs bg-red-600 text-white px-2 py-0.5 rounded-full">Dilindungi</span>
                        @endif
                        @if ($fauna->status_konservasi)
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded-full">{{ $fauna->status_konservasi }}</span>
                        @endif
                    </td>
                   <td class="px-4 py-3 text-right space-x-2 whitespace-nowrap">
                        <a href="{{ route('admin.fauna.edit', $fauna) }}"
                           class="inline-block text-xs font-medium text-green-700 bg-green-50 border border-green-200 hover:bg-green-100 px-3 py-1.5 rounded-lg transition">Edit</a>
                        <form action="{{ route('admin.fauna.destroy', $fauna) }}" method="POST" class="inline" onsubmit="return confirm('Hapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-xs font-medium text-red-600 bg-red-50 border border-red-200 hover:bg-red-100 px-3 py-1.5 rounded-lg transition">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="px-4 py-6 text-center text-gray-400">Belum ada data fauna.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">{{ $faunas->links('partials.pagination') }}</div>
@endsection
