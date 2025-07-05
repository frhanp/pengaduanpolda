<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Pengaduan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- [PENAMBAHAN] Form Filter -->
                    <form id="filter-form" method="GET" action="{{ route('admin.pengaduan.list') }}">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                            <!-- Filter Pencarian -->
                            <div>
                                <label for="search" class="text-sm font-medium text-gray-700">Cari Pelapor/NIK</label>
                                <input type="text" name="search" id="search" placeholder="Ketik untuk mencari..." value="{{ request('search') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <!-- Filter Status -->
                            <div>
                                <label for="status" class="text-sm font-medium text-gray-700">Status</label>
                                <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="">Semua Status</option>
                                    <option value="Baru" {{ request('status') == 'Baru' ? 'selected' : '' }}>Baru</option>
                                    <option value="Diverifikasi" {{ request('status') == 'Diverifikasi' ? 'selected' : '' }}>Diverifikasi</option>
                                    <option value="Diteruskan ke Reskrim" {{ request('status') == 'Diteruskan ke Reskrim' ? 'selected' : '' }}>Diteruskan</option>
                                    <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                </select>
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
                        <div class="flex justify-end">
                            <a href="{{ route('admin.pengaduan.list') }}" class="text-sm text-gray-600 hover:text-gray-900">Reset Filter</a>
                        </div>
                    </form>
                    <!-- Akhir Form Filter -->

                    <div class="overflow-x-auto mt-4">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pelapor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($pengaduans as $pengaduan)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $pengaduan->nama_pelapor }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $pengaduan->created_at->format('d M Y, H:i') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">{{ $pengaduan->status }}</span></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('admin.pengaduan.show', $pengaduan->id) }}" class="text-indigo-600 hover:text-indigo-900">Lihat Detail</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada data yang cocok dengan filter Anda.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{-- [PENTING] Menambahkan withQueryString agar filter tetap ada saat ganti halaman --}}
                        {{ $pengaduans->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- [PENAMBAHAN] Script untuk filter otomatis --}}
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterForm = document.getElementById('filter-form');
            const inputs = filterForm.querySelectorAll('input, select');
            let timer;

            inputs.forEach(input => {
                // Gunakan 'input' untuk text search agar lebih responsif
                const eventType = input.type === 'text' ? 'input' : 'change';

                input.addEventListener(eventType, function () {
                    // Tunda submit sedikit agar tidak memberatkan server saat mengetik
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