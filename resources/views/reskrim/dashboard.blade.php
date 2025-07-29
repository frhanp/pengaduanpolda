<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Reskrim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Kartu Statistik (tidak berubah) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="{{ route('reskrim.tugas.list') }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Tugas</p><p class="mt-1 text-3xl font-bold text-gray-900">{{ $totalTugas ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg></div></div></a>
                <a href="{{ route('reskrim.tugas.list', ['status' => 'Diproses']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Sedang Diproses</p><p class="mt-1 text-3xl font-bold text-purple-600">{{ $tugasDiproses ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div></div></a>
                <a href="{{ route('reskrim.tugas.list', ['status' => 'Selesai']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Tugas Selesai</p><p class="mt-1 text-3xl font-bold text-green-600">{{ $tugasSelesai ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div></div></a>
            </div>

            <!-- [PERUBAHAN] Grid untuk dua grafik analitik -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Kolom Kiri: Grafik Tren Kinerja -->
                <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Analitik Kinerja Tugas</h3>
                            <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg">
                                <a href="{{ route('reskrim.dashboard', ['periode' => '7hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '7hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">7 Hari</a>
                                <a href="{{ route('reskrim.dashboard', ['periode' => '30hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '30hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">30 Hari</a>
                                <a href="{{ route('reskrim.dashboard', ['periode' => '90hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '90hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">90 Hari</a>
                            </div>
                        </div>
                        <div>
                            <div id="lineChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Grafik Komposisi Status -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold mb-4 text-center">Komposisi Tugas</h3>
                        <div>
                            <div id="donutChart"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Skrip untuk Grafik Garis (Line Chart)
            var lineChartOptions = {
                series: [{
                    name: "Tugas Diterima",
                    data: {!! json_encode($lineChartData['diterima']) !!}
                }, {
                    name: "Tugas Diselesaikan",
                    data: {!! json_encode($lineChartData['selesai']) !!}
                }],
                chart: { type: 'area', height: 350, toolbar: { show: false }, zoom: { enabled: false } },
                colors: ['#4f46e5', '#10b981'], // Indigo dan Hijau
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth', width: 2 },
                xaxis: { categories: {!! json_encode($lineChartData['labels']) !!} },
                yaxis: { min: 0, tickAmount: 5, labels: { formatter: (val) => val.toFixed(0) } },
                tooltip: { x: { format: 'dd MMM' }, y: { formatter: (val) => val + " laporan" } },
                legend: { position: 'top' },
                fill: { type: 'gradient', gradient: { opacityFrom: 0.6, opacityTo: 0.1 } },
            };
            var lineChart = new ApexCharts(document.querySelector("#lineChart"), lineChartOptions);
            lineChart.render();

            // Skrip untuk Grafik Lingkaran (Donut Chart)
            var donutChartOptions = {
                series: {!! json_encode($donutChartData['data']) !!},
                chart: { type: 'donut', height: 350 },
                labels: {!! json_encode($donutChartData['labels']) !!},
                colors: ['#8b5cf6', '#10b981'], // Ungu dan Hijau
                legend: { position: 'bottom' },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: { width: 200 },
                        legend: { position: 'bottom' }
                    }
                }]
            };
            var donutChart = new ApexCharts(document.querySelector("#donutChart"), donutChartOptions);
            donutChart.render();
        });
    </script>
    @endpush
</x-app-layout>