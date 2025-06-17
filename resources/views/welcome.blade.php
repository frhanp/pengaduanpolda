{{-- @dd($laporan) --}}
<!DOCTYPE html>
<html lang="id" x-data="{ menuOpen: false }" class="bg-gradient-to-br from-gray-50 to-blue-50 text-gray-900 scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sistem Pengaduan Masyarakat Polda">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaduan Polda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.Default.css" />
    <script src="https://unpkg.com/leaflet.markercluster@1.5.1/dist/leaflet.markercluster.js"></script>
    <style>
        /* Glassmorphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        /* [PENAMBAHAN] - Ukuran untuk div Peta */
        #map {
            height: 400px;
            z-index: 10;
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        #legend {
            padding: 10px;
            line-height: 18px;
            color: #555;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        #legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
            border-radius: 50%;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen font-sans antialiased">
    <header class="sticky top-0 z-50 glass">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-6">
            <a href="#" class="text-3xl font-bold text-blue-700 tracking-tight">PoldaCare</a>
            <nav class="hidden lg:flex space-x-8 items-center">
                <a href="#lapor"
                    class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Lapor<span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                <a href="#tentang"
                    class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Tentang<span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                <a href="#fitur"
                    class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Fitur<span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                <a href="#kontak"
                    class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Kontak<span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                <a href="{{ route('login') }}"
                    class="px-6 py-2.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 hover:shadow-blue-600/50 transition transform hover:scale-105">Masuk
                    Petugas</a>
            </nav>
            <button @click="menuOpen = !menuOpen" class="lg:hidden text-gray-700"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg></button>
        </div>
        <div x-show="menuOpen" @click.away="menuOpen = false" class="lg:hidden glass p-6 space-y-4">
            <a href="#lapor" class="block text-gray-700 font-medium hover:text-blue-600 transition">Lapor</a>
            <a href="#tentang" class="block text-gray-700 font-medium hover:text-blue-600 transition">Tentang</a>
            <a href="#fitur" class="block text-gray-700 font-medium hover:text-blue-600 transition">Fitur</a>
            <a href="#kontak" class="block text-gray-700 font-medium hover:text-blue-600 transition">Kontak</a>
            <a href="{{ route('login') }}"
                class="block px-6 py-2.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 transition transform hover:scale-105 text-center">Masuk
                Petugas</a>
        </div>
    </header>

    <section
        class="flex-1 flex flex-col items-center justify-center text-center p-10 relative min-h-[80vh] bg-gradient-to-br from-blue-50 to-blue-100">
        <div class="glass p-10 rounded-2xl max-w-3xl animate-fadeInUp relative z-10">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 text-blue-900 leading-tight drop-shadow-lg">Pengaduan
                Masyarakat</h1>
            <p class="max-w-xl mx-auto mb-8 text-blue-800 text-lg">Sampaikan laporan Anda dengan mudah, aman, dan
                transparan. <br>PoldaCare siap melayani dan menjaga keamanan masyarakat.</p>

            <a href="#lapor"
                class="px-8 py-3.5 font-semibold text-gray-100 bg-blue-600 rounded-full shadow-lg transition transform hover:bg-blue-500 hover:shadow-blue-500/50 hover:scale-105">
                Laporkan Sekarang
            </a>
        </div>
    </section>

    <section id="lapor" class="py-20 px-10 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-700 animate-fadeInUp">Buat Laporan Anda</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-lg">Isi formulir di bawah ini dengan lengkap dan
                    benar. Setiap laporan dari Anda sangat berarti bagi kami.</p>
            </div>

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
                    <p class="font-bold">Sukses!</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <p class="font-bold">Terjadi Kesalahan</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="glass p-8 rounded-2xl">
                <form action="{{ route('pengaduan.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Nama
                                Lengkap</label>
                            <input type="text" id="nama_pelapor" name="nama_pelapor"
                                value="{{ old('nama_pelapor') }}"
                                class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition"
                                required>
                        </div>
                        <div>
                            <label for="no_hp_pelapor" class="block mb-2 text-sm font-medium text-gray-700">No.
                                Handphone</label>
                            <input type="tel" id="no_hp_pelapor" name="no_hp_pelapor"
                                value="{{ old('no_hp_pelapor') }}"
                                class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition"
                                required>
                        </div>
                        <div>
                            <label for="umur_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Umur
                                (Opsional)</label>
                            <input type="number" id="umur_pelapor" name="umur_pelapor"
                                value="{{ old('umur_pelapor') }}"
                                class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition">
                        </div>
                        <div>
                            <label for="pekerjaan_pelapor"
                                class="block mb-2 text-sm font-medium text-gray-700">Pekerjaan (Opsional)</label>
                            <input type="text" id="pekerjaan_pelapor" name="pekerjaan_pelapor"
                                value="{{ old('pekerjaan_pelapor') }}"
                                class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition">
                        </div>
                    </div>
                    <div>
                        <label for="alamat_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Alamat
                            (Opsional)</label>
                        <textarea id="alamat_pelapor" name="alamat_pelapor" rows="3"
                            class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition">{{ old('alamat_pelapor') }}</textarea>
                    </div>
                    <div>
                        <label for="isi_laporan" class="block mb-2 text-sm font-medium text-gray-700">Isi
                            Laporan</label>
                        <textarea id="isi_laporan" name="isi_laporan" rows="5"
                            class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition"
                            required>{{ old('isi_laporan') }}</textarea>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">Tandai Lokasi Kejadian di
                            Peta</label>
                        <div id="map" class="rounded-lg border border-gray-300"></div>
                        <div id="legend-container" class="relative">
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Koordinat Terpilih: <span id="koordinat"
                                class="font-semibold">Belum dipilih</span></p>
                        <input type="hidden" name="latitude" id="latitude" required>
                        <input type="hidden" name="longitude" id="longitude" required>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full px-8 py-3.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg transition transform hover:bg-blue-700 hover:scale-105">Kirim
                            Laporan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <section id="tentang" class="p-10 max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-blue-700">Tentang PoldaCare</h2>
        <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed">PoldaCare adalah platform resmi Polda untuk
            menerima laporan masyarakat secara online, dirancang untuk memberikan pelayanan yang cepat, transparan, dan
            terpercaya dengan teknologi modern.</p>
    </section>

    <section id="fitur" class="p-10 max-w-7xl mx-auto grid md:grid-cols-3 gap-8">
        <div
            class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl hover:bg-blue-100/60 backdrop-blur-md">
            <h4 class="font-bold text-blue-700 mb-3 text-2xl">Aduan Mudah</h4>
            <p class="text-gray-600 leading-relaxed">Laporkan masalah secara langsung melalui platform kami tanpa perlu
                mengunjungi kantor.</p>
        </div>
        <div
            class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl hover:bg-blue-100/60 backdrop-blur-md">
            <h4 class="font-bold text-blue-700 mb-3 text-2xl">Transparan</h4>
            <p class="text-gray-600 leading-relaxed">Pantau perkembangan laporan Anda secara real-time dengan laporan
                yang jelas dan lengkap.</p>
        </div>
        <div
            class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl hover:bg-blue-100/60 backdrop-blur-md">
            <h4 class="font-bold text-blue-700 mb-3 text-2xl">Aman</h4>
            <p class="text-gray-600 leading-relaxed">Identitas dan data pelapor dijamin kerahasiaannya dengan sistem
                keamanan terkini.</p>
        </div>
    </section>

    <section id="kontak" class="p-10 max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-blue-700">Kontak Kami</h2>
        <p class="text-gray-600 text-lg">Hubungi kami melalui email <a href="mailto:pengaduan@polda.go.id"
                class="font-semibold text-blue-600 hover:text-blue-800 transition underline">pengaduan@polda.go.id</a>
            atau kunjungi kantor Polda terdekat.</p>
    </section>

    <footer class="p-6 text-center text-gray-600 bg-gray-100 glass">
        © {{ date('Y') }} PoldaCare. Semua hak dilindungi.
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const gorontaloCoords = [0.5406, 123.0623];
            const map = L.map('map').setView(gorontaloCoords, 13);
    
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
    
            let marker;
            
            function updateCoordinates(latlng) {
                document.getElementById('latitude').value = latlng.lat;
                document.getElementById('longitude').value = latlng.lng;
                document.getElementById('koordinat').textContent = `${latlng.lat.toFixed(6)}, ${latlng.lng.toFixed(6)}`;
            }
    
            function placeMarker(latlng) {
                if (marker) {
                    marker.setLatLng(latlng);
                } else {
                    marker = L.marker(latlng, { draggable: true }).addTo(map);
                    marker.on('dragend', function(event) {
                        updateCoordinates(event.target.getLatLng());
                    });
                }
                updateCoordinates(latlng);
            }
    
            map.on('click', function(e) {
                placeMarker(e.latlng);
            });
    
            // ==============================================================
            // [PERUBAHAN UTAMA] - Menggunakan MarkerCluster
            // ==============================================================
    
            // 1. Buat grup cluster
            const markers = L.markerClusterGroup();
            const laporanData = @json($laporan ?? []);
    
            // 2. Loop data laporan dan tambahkan marker ke GRUP CLUSTER, bukan ke PETA
            laporanData.forEach(function(lpr) {
                const popupContent = `<b>Status: ${lpr.status}</b><br>${lpr.isi_laporan.substring(0, 50)}...`;
                const singleMarker = L.marker([lpr.latitude, lpr.longitude])
                                    .bindPopup(popupContent);
                markers.addLayer(singleMarker);
            });
    
            // 3. Tambahkan grup cluster yang sudah berisi semua marker ke peta
            map.addLayer(markers);
    
            // 4. Buat dan tambahkan legenda ke peta
            const legend = L.control({position: 'bottomright'});
            legend.onAdd = function (map) {
                const div = L.DomUtil.create('div', 'info legend');
                div.id = 'legend';
                const grades = [1, 10, 50]; // Angka untuk kategori
                const labels = ['Aman', 'Waspada', 'Rawan']; // Label
                const colors = ['#87CEEB', '#FFD700', '#FF4500']; // Warna (Biru, Kuning, Merah)
    
                div.innerHTML += '<b>Tingkat Kerawanan</b><br>';
                // loop through our density intervals and generate a label with a colored square for each interval
                for (let i = 0; i < grades.length; i++) {
                    div.innerHTML +=
                        '<i style="background:' + colors[i] + '"></i> ' +
                        labels[i] + ' (' + grades[i] + (grades[i + 1] ? '&ndash;' + (grades[i + 1] - 1) : '+') + ' Laporan)<br>';
                }
                return div;
            };
            legend.addTo(map);
        });
    </script>
</body>

</html>
