@if ($paginator->hasPages())
    <div class="flex items-center justify-center gap-3 text-sm">
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 rounded-lg border border-gray-200 text-gray-300 cursor-not-allowed">&laquo; Previous</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50 transition">&laquo; Previous</a>
        @endif

        <span class="text-gray-400 px-2">Halaman {{ $paginator->currentPage() }} dari {{ $paginator->lastPage() }}</span>

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50 transition">Next &raquo;</a>
        @else
            <span class="px-4 py-2 rounded-lg border border-gray-200 text-gray-300 cursor-not-allowed">Next &raquo;</span>
        @endif
    </div>
@endif