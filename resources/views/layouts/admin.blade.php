<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Admin - TN Wasur Papua' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f4f6f2] text-gray-800 antialiased">
    <div x-data="{ sidebarOpen: false }" class="min-h-screen md:flex">
        {{-- Sidebar --}}
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
               class="fixed md:static inset-y-0 left-0 w-64 bg-green-900 text-white z-40 transform md:translate-x-0 transition-transform duration-200">
            <div class="px-5 py-5 border-b border-green-800">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 font-bold">
                    <span class="text-2xl">🌿</span> Taman Nasional Wasur Papua Selatan
                </a>
            </div>
            <nav class="p-3 space-y-2 text-sm">
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center gap-2 px-3 py-2.5 rounded-xl transition
                          {{ request()->routeIs('admin.dashboard')
                                ? 'bg-green-500 shadow-md shadow-green-950/40'
                                : 'bg-green-800/50 shadow-sm shadow-green-950/30 hover:bg-green-800' }}">
                    📊 Dashboard
                </a>
                <a href="{{ route('admin.flora.index') }}"
                   class="flex items-center gap-2 px-3 py-2.5 rounded-xl transition
                          {{ request()->routeIs('admin.flora.*')
                                ? 'bg-green-500 shadow-md shadow-green-950/40'
                                : 'bg-green-800/50 shadow-sm shadow-green-950/30 hover:bg-green-800' }}">
                    🌱 Data Flora
                </a>
                <a href="{{ route('admin.fauna.index') }}"
                   class="flex items-center gap-2 px-3 py-2.5 rounded-xl transition
                          {{ request()->routeIs('admin.fauna.*')
                                ? 'bg-green-500 shadow-md shadow-green-950/40'
                                : 'bg-green-800/50 shadow-sm shadow-green-950/30 hover:bg-green-800' }}">
                    🦜 Data Fauna
                </a>
                <a href="{{ route('admin.ekowisata.index') }}"
                   class="flex items-center gap-2 px-3 py-2.5 rounded-xl transition
                          {{ request()->routeIs('admin.ekowisata.*')
                                ? 'bg-green-500 shadow-md shadow-green-950/40'
                                : 'bg-green-800/50 shadow-sm shadow-green-950/30 hover:bg-green-800' }}">
                    🖼️ Data Ekowisata
                </a>
            </nav>
        </aside>

        {{-- Overlay mobile --}}
        <div x-show="sidebarOpen" @click="sidebarOpen = false" x-cloak class="fixed inset-0 bg-black/40 z-30 md:hidden"></div>

        {{-- Konten --}}
        <div class="flex-1 min-w-0">
            <header class="bg-white border-b sticky top-0 z-20 flex items-center justify-between px-4 sm:px-6 py-3">
                <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <h1 class="font-semibold text-green-900">{{ $pageTitle ?? 'Admin' }}</h1>

                {{-- Avatar admin + dropdown logout --}}
                <div x-data="{ profileOpen: false }" class="relative">
                    <button @click="profileOpen = !profileOpen" class="flex items-center gap-2">
                        <span class="w-9 h-9 rounded-full bg-green-600 text-white flex items-center justify-center text-sm font-bold">
                            {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                        </span>
                        <svg class="w-4 h-4 text-gray-400 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="profileOpen"
                         @click.outside="profileOpen = false"
                         x-cloak
                         class="absolute right-0 mt-2 w-48 bg-white border border-gray-100 rounded-lg shadow-lg py-1 z-30">
                        <div class="px-4 py-2 border-b border-gray-100">
                            <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name ?? '' }}</p>
                            <p class="text-xs text-gray-400">{{ auth()->user()->email ?? '' }}</p>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">🚪 Logout</button>
                        </form>
                    </div>
                </div>
            </header>

            {{-- Tombol melayang: Lihat Website --}}
            <a href="{{ route('beranda') }}"
               target="_blank"
               rel="noopener"
               class="fixed bottom-6 right-6 z-30 flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium pl-4 pr-5 py-3 rounded-full shadow-lg transition">
                <span class="text-lg">🌐</span> Lihat Website
            </a>

            <main class="p-4 sm:p-6">
                @if (session('status'))
                    <div class="mb-4 bg-green-50 border border-green-200 text-green-700 text-sm px-4 py-3 rounded-lg">
                        {{ session('status') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>