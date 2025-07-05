<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card Total Laporan -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <h3 class="text-lg font-medium text-gray-500">Total Laporan</h3>
                    <p class="mt-1 text-4xl font-bold text-gray-900">{{ $totalLaporan ?? 0 }}</p>
                </div>
                <!-- Card Laporan Baru -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <h3 class="text-lg font-medium text-gray-500">Laporan Baru</h3>
                    <p class="mt-1 text-4xl font-bold text-blue-600">{{ $laporanBaru ?? 0 }}</p>
                </div>
                <!-- Card Laporan Diverifikasi -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <h3 class="text-lg font-medium text-gray-500">Diverifikasi</h3>
                    <p class="mt-1 text-4xl font-bold text-yellow-500">{{ $laporanDiverifikasi ?? 0 }}</p>
                </div>
                <!-- Card Laporan Selesai -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <h3 class="text-lg font-medium text-gray-500">Selesai</h3>
                    <p class="mt-1 text-4xl font-bold text-green-600">{{ $laporanSelesai ?? 0 }}</p>
                </div>
            </div>

            <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Selamat Datang, {{ Auth::user()->name }}!</h3>
                    <p>Gunakan menu navigasi di sebelah kiri untuk mengelola pengaduan dan fitur lainnya.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>