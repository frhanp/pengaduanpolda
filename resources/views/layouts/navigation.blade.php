<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-6 border-b border-gray-200">
        {{-- [PERBAIKAN] Link logo sekarang dinamis sesuai peran --}}
        @if (Auth::check())
            @if (Auth::user()->role->value === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="text-2xl font-bold text-gray-800">
                    PoldaCare
                </a>
            @else
                <a href="{{ route('reskrim.dashboard') }}" class="text-2xl font-bold text-gray-800">
                    PoldaCare
                </a>
            @endif
        @endif
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2">
        {{-- [PERBAIKAN] Link navigasi utama dinamis sesuai peran --}}
        @if (Auth::check())
            @if (Auth::user()->role->value === 'admin')
                <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    {{ __('Dasbor Admin') }}
                </x-nav-link>
            @elseif (Auth::user()->role->value === 'reskrim')
                <x-nav-link :href="route('reskrim.dashboard')" :active="request()->routeIs('reskrim.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                    {{ __('Tugas Saya') }}
                </x-nav-link>
            @endif
        @endif
    </nav>
    
    {{-- [PERBAIKAN] Bagian ini dikembalikan seperti kode asli Anda --}}
    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
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