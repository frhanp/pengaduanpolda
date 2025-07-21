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
            <div id="map" data-laporan='{{ json_encode($laporan ?? []) }}'></div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mapElement = document.getElementById('map');
                if (!mapElement) return;

                let laporanData = [];
                try {
                    laporanData = JSON.parse(mapElement.dataset.laporan);
                } catch (e) {
                    console.error("Gagal mem-parsing data laporan:", e);
                }

                const gorontaloCoords = [0.5406, 123.0623];
                const map = L.map('map').setView(gorontaloCoords, 12);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '© OpenStreetMap'
                }).addTo(map);

                const markers = L.markerClusterGroup();
                
                laporanData.forEach(function(lpr) {
                    if (lpr.latitude && lpr.longitude) {
                        const popupContent = `<b>Status: ${lpr.status}</b><br>${lpr.isi_laporan.substring(0, 50)}...`;
                        
                        // [PERUBAHAN] Menitipkan nama Polsek ke dalam options marker
                        const marker = L.marker([lpr.latitude, lpr.longitude], {
                            polsekName: lpr.tujuan_polsek // Menitipkan data Polsek
                        }).bindPopup(popupContent);

                        markers.addLayer(marker);
                    }
                });

                map.addLayer(markers);

                // [PENAMBAHAN] Logika untuk menampilkan tooltip saat hover
                let polsekTooltip; // Variabel untuk menyimpan tooltip

                markers.on('clustermouseover', function (e) {
                    // 1. Ambil semua marker di dalam cluster
                    const childMarkers = e.layer.getAllChildMarkers();
                    
                    // 2. Kumpulkan nama Polsek dari setiap marker
                    const polsekNames = childMarkers.map(marker => marker.options.polsekName);
                    
                    // 3. Buat daftar nama Polsek yang unik (agar tidak ada nama yang berulang)
                    const uniquePolsekNames = [...new Set(polsekNames)];
                    
                    // 4. Buat konten HTML untuk tooltip
                    const tooltipContent = '<div class="font-semibold mb-1">Wilayah Polsek:</div>' + uniquePolsekNames.join('<br>');

                    // 5. Buat dan tampilkan tooltip yang mengikuti kursor
                    polsekTooltip = L.tooltip({ sticky: true })
                        .setLatLng(e.latlng)
                        .setContent(tooltipContent)
                        .addTo(map);
                });

                // Event untuk menghilangkan tooltip saat mouse menjauh
                markers.on('clustermouseout', function (e) {
                    if (polsekTooltip) {
                        map.closeTooltip(polsekTooltip);
                    }
                });

                // Legenda (tidak berubah)
                const legend = L.control({ position: 'bottomright' });
                legend.onAdd = function(map) {
                    const div = L.DomUtil.create('div', 'info legend');
                    div.id = 'legend';
                    const colors = ['#b5e28c', '#f1d357', '#fd9c73'];
                    const labels = ['Kepadatan Rendah', 'Kepadatan Sedang', 'Kepadatan Tinggi'];
                    div.innerHTML = '<b>Kepadatan Laporan</b><br>';
                    for (let i = 0; i < labels.length; i++) {
                        div.innerHTML += `<i style="background:${colors[i]}"></i> ${labels[i]}<br>`;
                    }
                    return div;
                };
                legend.addTo(map);
            });
        </script>
    @endpush
</x-guest-layout>
