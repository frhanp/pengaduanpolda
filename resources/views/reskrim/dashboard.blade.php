<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Reskrim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- [PERUBAHAN] Setiap kartu sekarang adalah link <a> -->

                <!-- Card 1: Total Tugas -->
                <a href="{{ route('reskrim.tugas.list') }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Tugas</p>
                            <p class="mt-1 text-3xl font-bold text-gray-900">{{ $totalTugas ?? 0 }}</p>
                        </div>
                        <div class="p-3 bg-gray-100 rounded-lg">
                            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Card 2: Sedang Diproses -->
                <a href="{{ route('reskrim.tugas.list', ['status' => 'Diproses']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Sedang Diproses</p>
                            <p class="mt-1 text-3xl font-bold text-purple-600">{{ $tugasDiproses ?? 0 }}</p>
                        </div>
                        <div class="p-3 bg-gray-100 rounded-lg">
                            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Card 3: Tugas Selesai (Diteruskan ke Penyidik) -->
                <a href="{{ route('reskrim.tugas.list', ['status' => 'Diteruskan ke Penyidik']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Diteruskan ke Penyidik</p>
                            <p class="mt-1 text-3xl font-bold text-teal-600">{{ $tugasSelesai ?? 0 }}</p>
                        </div>
                        <div class="p-3 bg-gray-100 rounded-lg">
                            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>