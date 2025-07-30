<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-6 border-b border-gray-200">
        {{-- Link logo dinamis sesuai peran (tidak berubah) --}}
        @if (Auth::check())
            @if (Auth::user()->role->value === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="text-2xl font-bold text-gray-800">
                    Polres Gorontalo Kota
                </a>
            @else
                <a href="{{ route('reskrim.dashboard') }}" class="text-2xl font-bold text-gray-800">
                    Polres Gorontalo Kota
                </a>
            @endif
        @endif
    </div>

    <nav class="flex-1 px-4 py-6 space-y-1">
        @if (Auth::check())
            {{-- ====================================================== --}}
            {{-- [PERUBAHAN UTAMA] Tampilan Navigasi untuk Admin         --}}
            {{-- ====================================================== --}}
            @if (Auth::user()->role->value === 'admin')
                <!-- Link ke Dashboard Statistik -->
                <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span>{{ __('Dashboard') }}</span>
                </x-nav-link>

                <!-- Judul "Fitur" -->
                <h3 class="px-3 pt-4 pb-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    Fitur
                </h3>

                <!-- Link ke Manajemen Pengaduan -->
                <x-nav-link :href="route('admin.pengaduan.list')" :active="request()->routeIs('admin.pengaduan.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>{{ __('Laporan Pengaduan') }}</span>
                </x-nav-link>

                <!-- Link ke Manajemen STPL -->
                <x-nav-link :href="route('admin.stpl.index')" :active="request()->routeIs('admin.stpl.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    <span>{{ __('Manajemen STPL') }}</span>
                </x-nav-link>

                {{-- Navigasi untuk Reskrim (tidak berubah) --}}
            @elseif (Auth::user()->role->value === 'reskrim')
                <!-- Link ke Dashboard Reskrim -->
                <x-nav-link :href="route('reskrim.dashboard')" :active="request()->routeIs('reskrim.dashboard')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span>{{ __('Dashboard') }}</span>
                </x-nav-link>

                <!-- Link ke Daftar Tugas -->
                <x-nav-link :href="route('reskrim.tugas.list')" :active="request()->routeIs('reskrim.tugas.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <span>{{ __('Tugas Saya') }}</span>
                </x-nav-link>
            @endif
        @endif
    </nav>

    {{-- Bagian Profil & Logout (tidak berubah) --}}
    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}"
                class="block px-4 py-2 hover:bg-gray-100 rounded-lg">{{ __('Profile') }}</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</aside>
