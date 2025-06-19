<x-guest-layout>

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

    @include('partials.report-form')

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
                class="font-semibold text-blue-600 hover:text-blue-800 transition underline">{{ 'pengaduan@polda.go.id' }}</a>
            atau kunjungi kantor Polda terdekat.</p>
    </section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const gorontaloCoords = [0.5406, 123.0623];
            const map = L.map('map').setView(gorontaloCoords, 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            let marker;

            function updateCoordinates(latlng) {
                document.getElementById('latitude').value = latlng.lat;
                document.getElementById('longitude').value = latlng.lng;
                document.getElementById('koordinat').textContent =
                    `${latlng.lat.toFixed(6)}, ${latlng.lng.toFixed(6)}`;
            }

            function placeMarker(latlng) {
                if (marker) {
                    marker.setLatLng(latlng);
                } else {
                    marker = L.marker(latlng, {
                        draggable: true
                    }).addTo(map);
                    marker.on('dragend', (event) => updateCoordinates(event.target.getLatLng()));
                }
                updateCoordinates(latlng);
            }

            map.on('click', (e) => placeMarker(e.latlng));

            const markers = L.markerClusterGroup();
            const laporanData = @json($laporan ?? []);

            laporanData.forEach(function(lpr) {
                const popupContent =
                    `<b>Status: ${lpr.status}</b><br>${lpr.isi_laporan.substring(0, 50)}...`;
                markers.addLayer(L.marker([lpr.latitude, lpr.longitude]).bindPopup(popupContent));
            });

            map.addLayer(markers);

            const legend = L.control({
                position: 'bottomright'
            });
            legend.onAdd = function(map) {
                const div = L.DomUtil.create('div', 'info legend');
                div.id = 'legend';
                const grades = [1, 10, 50],
                    labels = ['Aman', 'Waspada', 'Rawan'],
                    colors = ['#6ecc3999', '#FFD700', '#FF4500'];
                div.innerHTML += '<b>Tingkat Kerawanan</b><br>';
                for (let i = 0; i < grades.length; i++) {
                    div.innerHTML +=
                        `<i style="background:${colors[i]}"></i> ${labels[i]} (${grades[i]}${grades[i+1] ? '&ndash;'+(grades[i+1]-1) : '+'})<br>`;
                }
                return div;
            };
            legend.addTo(map);
        });
    </script>
@endpush

</x-guest-layout>
