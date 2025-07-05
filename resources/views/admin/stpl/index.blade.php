<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen STPL') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Daftar Surat Tanda Penerimaan Laporan</h3>

                    <!-- [PENAMBAHAN] Form Filter -->
                    <form id="filter-form" method="GET" action="{{ route('admin.stpl.index') }}">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            <!-- Filter Pencarian -->
                            <div class="md:col-span-1">
                                <label for="search" class="text-sm font-medium text-gray-700">Cari No. STPL / Pelapor</label>
                                <input type="text" name="search" id="search" placeholder="Ketik untuk mencari..." value="{{ request('search') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <!-- Filter Tanggal -->
                            <div>
                                <label for="start_date" class="text-sm font-medium text-gray-700">Dari Tanggal</label>
                                <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <div>
                                <label for="end_date" class="text-sm font-medium text-gray-700">Sampai Tanggal</label>
                                <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="flex justify-end mb-4">
                            <a href="{{ route('admin.stpl.index') }}" class="text-sm text-gray-600 hover:text-gray-900">Reset Filter</a>
                        </div>
                    </form>
                    <!-- Akhir Form Filter -->

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. STPL</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pelapor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Dibuat</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($stpls as $stpl)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $stpl->nomor_stpl }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $stpl->pengaduan->nama_pelapor }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $stpl->tanggal_dibuat->format('d M Y') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            {{-- [PERBAIKAN] Tombol Download --}}
                                            <a href="{{ route('admin.stpl.download', $stpl->id) }}" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada data STPL yang cocok dengan filter Anda.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{-- [PENTING] Menambahkan withQueryString agar filter tetap ada saat ganti halaman --}}
                        {{ $stpls->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Script untuk filter otomatis --}}
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterForm = document.getElementById('filter-form');
            const inputs = filterForm.querySelectorAll('input, select');
            let timer;

            inputs.forEach(input => {
                const eventType = input.type === 'text' ? 'input' : 'change';
                input.addEventListener(eventType, function () {
                    clearTimeout(timer);
                    timer = setTimeout(() => {
                        filterForm.submit();
                    }, 500); // Jeda 0.5 detik
                });
            });
        });
    </script>
    @endpush
</x-app-layout>