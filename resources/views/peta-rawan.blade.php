<x-guest-layout>
    {{-- Style ini akan membuat peta mengisi hampir seluruh layar --}}
    @push('styles')
        <style>
            #map-container {
                height: calc(100vh - 150px); /* Tinggi layar dikurangi perkiraan tinggi header & footer */
                width: 100%;
            }
            #map {
                height: 100%;
                width: 100%;
                border-radius: 0; /* Menghilangkan sudut bulat */
                border: none;
            }
            /* Memastikan legenda dari layout utama tetap terlihat bagus */
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
    @endpush

    <section class="w-full">
         
        <div class="bg-blue-600 text-white p-6 text-center shadow-lg">
            <h1 class="text-3xl font-bold">Peta Sebaran Laporan Kerawanan</h1>
            <p class="mt-2 text-blue-100">Peta ini menampilkan semua titik laporan yang telah masuk ke sistem.</p>
        </div>
        <div id="map-container">
            {{-- Elemen peta, dengan data laporan yang dikirim dari controller --}}
            <div id="map" data-laporan="{{ htmlspecialchars(json_encode($laporan ?? [])) }}"></div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Inisialisasi Peta (Sama seperti acuan)
            const gorontaloCoords = [0.5406, 123.0623];
            const map = L.map('map').setView(gorontaloCoords, 12); // Zoom diatur agar lebih luas

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            // 2. Logika Peta Cluster (Sama seperti acuan)
            const markers = L.markerClusterGroup();
            const laporanData = @json($laporan ?? []);

            laporanData.forEach(function(lpr) {
                if (lpr.latitude && lpr.longitude) {
                    const popupContent = `<b>Status: ${lpr.status}</b><br>${lpr.isi_laporan.substring(0, 50)}...`;
                    markers.addLayer(L.marker([lpr.latitude, lpr.longitude]).bindPopup(popupContent));
                }
            });

            map.addLayer(markers);

            // 3. Legenda (Sama seperti acuan)
            const legend = L.control({ position: 'bottomright' });
            legend.onAdd = function(map) {
                const div = L.DomUtil.create('div', 'info legend');
                div.id = 'legend';
                const grades = [1, 10, 50],
                      labels = ['Aman', 'Waspada', 'Rawan'],
                      colors = ['#6ecc3999', '#FFD700', '#FF4500'];
                div.innerHTML += '<b>Tingkat Kerawanan</b><br>';
                for (let i = 0; i < grades.length; i++) {
                    div.innerHTML += `<i style="background:${colors[i]}"></i> ${labels[i]} (${grades[i]}${grades[i+1] ? '&ndash;'+(grades[i+1]-1) : '+'})<br>`;
                }
                return div;
            };
            legend.addTo(map);

            // Catatan: Semua fungsi yang berhubungan dengan form (placeMarker, updateCoordinates) 
            // dan event map.on('click') telah dihapus karena tidak dibutuhkan di sini.
        });
    </script>
@endpush

</x-guest-layout>