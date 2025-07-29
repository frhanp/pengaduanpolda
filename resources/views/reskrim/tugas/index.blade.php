<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tugas Laporan Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- [PENAMBAHAN] Form Filter Otomatis -->
                    <form id="filter-form" method="GET" action="{{ route('reskrim.tugas.list') }}">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                            <div>
                                <label for="search" class="text-sm font-medium text-gray-700">Cari Pelapor/NIK</label>
                                <input type="text" name="search" id="search" placeholder="Ketik untuk mencari..."
                                    value="{{ request('search') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="status" class="text-sm font-medium text-gray-700">Status</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="">Semua Status</option>
                                    <option value="Diproses" {{ request('status') == 'Diproses' ? 'selected' : '' }}>
                                        Diproses</option>
                                    <option value="Diteruskan ke Penyidik"
                                        {{ request('status') == 'Diteruskan ke Penyidik' ? 'selected' : '' }}>Diteruskan
                                        ke Penyidik</option>
                                </select>
                            </div>
                            <div>
                                <label for="start_date" class="text-sm font-medium text-gray-700">Dari Tanggal</label>
                                <input type="date" name="start_date" id="start_date"
                                    value="{{ request('start_date') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="end_date" class="text-sm font-medium text-gray-700">Sampai Tanggal</label>
                                <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('reskrim.tugas.list') }}"
                                class="text-sm text-gray-600 hover:text-gray-900">Reset Filter</a>
                        </div>
                    </form>
                    <!-- Akhir Form Filter -->

                    <div class="overflow-x-auto mt-4">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pelapor
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status
                                    </th>
                                    <th class="relative px-6 py-3"><span class="sr-only">Aksi</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($pengaduans as $pengaduan)
                                    <tr>
                                        <td class="px-6 py-4">#{{ $pengaduan->id }}</td>
                                        <td class="px-6 py-4">{{ $pengaduan->nama_pelapor }}</td>
                                        <td class="px-6 py-4">{{ $pengaduan->created_at->format('d M Y') }}</td>
                                        <td class="px-6 py-4">
                                            @php
                                                $statusClass = '';
                                                if ($pengaduan->status == 'Diteruskan ke Reskrim') {
                                                    $statusClass = 'bg-indigo-100 text-indigo-800';
                                                } elseif ($pengaduan->status == 'Diproses') {
                                                    $statusClass = 'bg-purple-100 text-purple-800';
                                                } elseif ($pengaduan->status == 'Selesai') {
                                                    $statusClass = 'bg-green-100 text-green-800';
                                                } // [PERUBAHAN]
                                            @endphp
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">{{ $pengaduan->status }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="{{ route('reskrim.tugas.show', $pengaduan) }}"
                                                class="text-indigo-600 hover:text-indigo-900">Lihat Detail</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada data
                                            yang cocok dengan filter Anda.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $pengaduans->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterForm = document.getElementById('filter-form');
                const inputs = filterForm.querySelectorAll('input, select');
                let timer;

                inputs.forEach(input => {
                    const eventType = input.type === 'text' ? 'input' : 'change';
                    input.addEventListener(eventType, function() {
                        clearTimeout(timer);
                        timer = setTimeout(() => {
                            filterForm.submit();
                        }, 500);
                    });
                });
            });
        </script>
    @endpush
</x-app-layout>
