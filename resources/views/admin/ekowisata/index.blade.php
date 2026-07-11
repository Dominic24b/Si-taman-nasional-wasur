@extends('layouts.admin')

@php($pageTitle = 'Data Ekowisata')

@section('content')
<div class="flex justify-between items-center mb-4">
    <p class="text-sm text-gray-500">{{ $ekowisatas->total() }} destinasi terdaftar</p>
    <a href="{{ route('admin.ekowisata.create') }}" class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-4 py-2 rounded-lg">+ Tambah Destinasi</a>
</div>

<div class="bg-white rounded-xl border border-green-100 overflow-x-auto">
    <table class="w-full text-sm">
        <thead class="bg-green-50 text-green-900">
            <tr>
                <th class="text-left px-4 py-3">Nama</th>
                <th class="text-left px-4 py-3">Aksesibilitas</th>
                <th class="text-left px-4 py-3">Urutan</th>
                <th class="text-right px-4 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @forelse ($ekowisatas as $wisata)
                <tr>
                    <td class="px-4 py-3 font-medium text-gray-800">{{ $wisata->nama }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $wisata->aksesibilitas ?: '-' }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $wisata->urutan }}</td>
                    <td class="px-4 py-3 text-right space-x-2">
                       <td class="px-4 py-3 text-right space-x-2 whitespace-nowrap">
                        <a href="{{ route('admin.ekowisata.edit', $wisata) }}"
                           class="inline-block text-xs font-medium text-green-700 bg-green-50 border border-green-200 hover:bg-green-100 px-3 py-1.5 rounded-lg transition">Edit</a>
                        <form action="{{ route('admin.ekowisata.destroy', $wisata) }}" method="POST" class="inline" onsubmit="return confirm('Hapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-xs font-medium text-red-600 bg-red-50 border border-red-200 hover:bg-red-100 px-3 py-1.5 rounded-lg transition">Hapus</button>
                        </form>
                    </td>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="px-4 py-6 text-center text-gray-400">Belum ada data ekowisata.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">{{ $ekowisatas->links('partials.pagination') }}</div>
@endsection
