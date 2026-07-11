<nav x-data="{ mobileOpen: false }" class="bg-green-900 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <a href="{{ route('beranda') }}" class="flex items-center gap-2 text-white font-bold text-lg">
                <span class="text-2xl">🌿</span>
                <span>Taman Nasional Wasur Papua Selatan</span>
            </a>

            {{-- Menu desktop --}}
            <div class="hidden md:flex items-center gap-1">
                @php
                    $menu = [
                        ['route' => 'beranda', 'label' => 'Beranda'],
                        ['route' => 'flora.index', 'label' => 'Flora'],
                        ['route' => 'fauna.index', 'label' => 'Fauna'],
                        ['route' => 'ekowisata.index', 'label' => 'Ekowisata'],
                        ['route' => 'tentang', 'label' => 'Tentang'],
                    ];
                @endphp

                @foreach ($menu as $item)
                    <a href="{{ route($item['route']) }}"
                       class="px-4 py-2 rounded-full text-sm font-medium transition
                              {{ request()->routeIs($item['route'])
                                    ? 'bg-green-500 text-white'
                                    : 'text-green-50 hover:bg-green-800' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach

                @auth
                    <a href="{{ route('admin.dashboard') }}"
                       class="ml-2 px-4 py-2 rounded-full text-sm font-medium bg-green-700 text-white hover:bg-green-600 transition">
                        Panel Admin
                    </a>
                @endauth
            </div>

            {{-- Tombol hamburger mobile --}}
            <button @click="mobileOpen = !mobileOpen" class="md:hidden text-white p-2" aria-label="Buka menu">
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Menu mobile --}}
        <div x-show="mobileOpen" x-cloak class="md:hidden pb-4 flex flex-col gap-1">
            @foreach ($menu as $item)
                <a href="{{ route($item['route']) }}"
                   class="px-4 py-2 rounded-lg text-sm font-medium transition
                          {{ request()->routeIs($item['route'])
                                ? 'bg-green-500 text-white'
                                : 'text-green-50 hover:bg-green-800' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach

            @auth
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-lg text-sm font-medium bg-green-700 text-white">Panel Admin</a>
            @endauth
        </div>
    </div>
</nav>
