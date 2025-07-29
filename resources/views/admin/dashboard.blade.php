<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Kartu Statistik Utama --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="{{ route('admin.pengaduan.list') }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Laporan</p><p class="mt-1 text-3xl font-bold text-gray-900">{{ $totalLaporan ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg></div></div></a>
                <a href="{{ route('admin.pengaduan.list', ['status' => 'Baru']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Laporan Baru</p><p class="mt-1 text-3xl font-bold text-blue-600">{{ $laporanBaru ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg></div></div></a>
                <a href="{{ route('admin.pengaduan.list', ['status' => 'Diverifikasi']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Diverifikasi</p><p class="mt-1 text-3xl font-bold text-yellow-500">{{ $laporanDiverifikasi ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div></div></a>
                <a href="{{ route('admin.pengaduan.list', ['status' => 'Selesai']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Selesai</p><p class="mt-1 text-3xl font-bold text-green-600">{{ $laporanSelesai ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></div></div></a>
            </div>

            <!-- Grid untuk Analitik -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Kolom Kiri: Grafik Tren Laporan -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Tren Laporan Masuk</h3>
                            <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg">
                                <a href="{{ route('admin.dashboard', ['periode' => '7hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '7hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">7 Hari</a>
                                <a href="{{ route('admin.dashboard', ['periode' => '30hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '30hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">30 Hari</a>
                                <a href="{{ route('admin.dashboard', ['periode' => '90hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '90hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">90 Hari</a>
                            </div>
                        </div>
                        <div><div id="lineChart"></div></div>
                    </div>
                </div>
                
                <!-- Kolom Kanan: Grafik Beban Kerja Reskrim -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold mb-4">Beban Kerja Tim Reskrim (Tugas Aktif)</h3>
                        <div><div id="barChart"></div></div>
                    </div>
                </div>
            </div>

            <!-- Daftar Laporan Mendesak -->
            <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     <h3 class="text-lg font-semibold mb-4">Laporan Baru yang Perlu Segera Ditindaklanjuti</h3>
                     <ul class="divide-y divide-gray-200">
                        @forelse ($laporanMendesak as $laporan)
                            <li class="py-3 flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-medium text-gray-800">{{ $laporan->nama_pelapor }}</p>
                                    <p class="text-xs text-gray-500">Masuk {{ $laporan->created_at->diffForHumans() }}</p>
                                </div>
                                <a href="{{ route('admin.pengaduan.show', $laporan) }}" class="text-sm text-indigo-600 hover:text-indigo-900">Lihat Laporan</a>
                            </li>
                        @empty
                            <li class="py-3 text-center text-sm text-gray-500">Tidak ada laporan baru yang menunggu verifikasi.</li>
                        @endforelse
                     </ul>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Skrip untuk Grafik Garis (Line Chart)
            var lineChart = new ApexCharts(document.querySelector("#lineChart"), {
                series: [{ name: "Laporan Masuk", data: {!! json_encode($lineChartData) !!} }],
                chart: { type: 'area', height: 300, toolbar: { show: false }, zoom: { enabled: false } },
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth', width: 2 },
                xaxis: { type: 'datetime', labels: { format: 'dd MMM' } },
                yaxis: { min: 0, tickAmount: 4, labels: { formatter: (val) => val.toFixed(0) } },
                tooltip: { x: { format: 'dd MMMM yyyy' } },
                fill: { type: 'gradient', gradient: { opacityFrom: 0.6, opacityTo: 0.1 } },
            });
            lineChart.render();

            // Skrip untuk Grafik Batang (Bar Chart)
            var barChart = new ApexCharts(document.querySelector("#barChart"), {
                series: [{ name: 'Tugas Aktif', data: {!! json_encode($barChartData['data']) !!} }],
                chart: { type: 'bar', height: 300, toolbar: { show: false } },
                plotOptions: { bar: { horizontal: false, columnWidth: '50%' } },
                dataLabels: { enabled: false },
                xaxis: { categories: {!! json_encode($barChartData['labels']) !!} },
                yaxis: { title: { text: 'Jumlah Laporan' }, labels: { formatter: (val) => val.toFixed(0) } },
                tooltip: { y: { title: { formatter: () => 'Tugas Aktif' } } }
            });
            barChart.render();
        });
    </script>
    @endpush
</x-app-layout>