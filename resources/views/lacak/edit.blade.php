<x-guest-layout>
    <section class="py-20 px-10 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-700">Perbaiki Laporan Anda</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-lg">
                    Silakan perbaiki data laporan Anda berdasarkan catatan di bawah, lalu kirim ulang.
                </p>
            </div>
            
            <div class="bg-red-100 border-l-4 border-red-500 text-red-800 p-4 rounded-lg mb-8" role="alert">
                <p class="font-bold">Catatan dari Petugas:</p>
                <p class="mt-1 italic">"{{ $pengaduan->catatan_pengembalian }}"</p>
            </div>

            <div class="glass p-8 rounded-2xl">
                <form action="{{ route('laporan.update.handle', $pengaduan->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    {{-- [PERBAIKAN] Melengkapi semua field yang dibutuhkan controller --}}
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor', $pengaduan->nama_pelapor) }}" class="w-full p-3 rounded-lg border @error('nama_pelapor') border-red-500 @else border-gray-300 @enderror" required>
                            @error('nama_pelapor')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="no_hp_pelapor" class="block mb-2 text-sm font-medium text-gray-700">No. Handphone</label>
                            <input type="tel" id="no_hp_pelapor" name="no_hp_pelapor" value="{{ old('no_hp_pelapor', $pengaduan->no_hp_pelapor) }}" class="w-full p-3 rounded-lg border @error('no_hp_pelapor') border-red-500 @else border-gray-300 @enderror" required>
                            @error('no_hp_pelapor')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="nik" class="block mb-2 text-sm font-medium text-gray-700">NIK</label>
                            <input type="text" id="nik" name="nik" value="{{ old('nik', $pengaduan->nik) }}" class="w-full p-3 rounded-lg border @error('nik') border-red-500 @else border-gray-300 @enderror" required>
                            @error('nik')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="foto_ktp" class="block mb-2 text-sm font-medium text-gray-700">Upload Ulang Foto KTP (Opsional)</label>
                            <input type="file" id="foto_ktp" name="foto_ktp" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('foto_ktp') ring-1 ring-red-500 rounded-lg @enderror">
                            @error('foto_ktp')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-700">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $pengaduan->tempat_lahir) }}" class="w-full p-3 rounded-lg border @error('tempat_lahir') border-red-500 @else border-gray-300 @enderror" required>
                            @error('tempat_lahir')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-700">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $pengaduan->tanggal_lahir ? $pengaduan->tanggal_lahir->format('Y-m-d') : '') }}" class="w-full p-3 rounded-lg border @error('tanggal_lahir') border-red-500 @else border-gray-300 @enderror" required>
                            @error('tanggal_lahir')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <div class="flex items-center space-x-6 mt-2">
                                <label class="inline-flex items-center"><input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-radio" @if(old('jenis_kelamin', $pengaduan->jenis_kelamin) == 'Laki-laki') checked @endif><span class="ml-2">Laki-laki</span></label>
                                <label class="inline-flex items-center"><input type="radio" name="jenis_kelamin" value="Perempuan" class="form-radio" @if(old('jenis_kelamin', $pengaduan->jenis_kelamin) == 'Perempuan') checked @endif><span class="ml-2">Perempuan</span></label>
                            </div>
                            @error('jenis_kelamin')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="agama" class="block mb-2 text-sm font-medium text-gray-700">Agama</label>
                            <select id="agama" name="agama" class="w-full p-3 rounded-lg border @error('agama') border-red-500 @else border-gray-300 @enderror" required>
                                <option value="Islam" @if(old('agama', $pengaduan->agama) == 'Islam') selected @endif>Islam</option>
                                <option value="Kristen Protestan" @if(old('agama', $pengaduan->agama) == 'Kristen Protestan') selected @endif>Kristen Protestan</option>
                            </select>
                            @error('agama')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="pekerjaan_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Pekerjaan (Opsional)</label>
                            <input type="text" id="pekerjaan_pelapor" name="pekerjaan_pelapor" value="{{ old('pekerjaan_pelapor', $pengaduan->pekerjaan_pelapor) }}" class="w-full p-3 rounded-lg border @error('pekerjaan_pelapor') border-red-500 @else border-gray-300 @enderror">
                            @error('pekerjaan_pelapor')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label for="alamat_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Alamat</label>
                        <textarea id="alamat_pelapor" name="alamat_pelapor" rows="3" class="w-full p-3 rounded-lg border @error('alamat_pelapor') border-red-500 @else border-gray-300 @enderror">{{ old('alamat_pelapor', $pengaduan->alamat_pelapor) }}</textarea>
                        @error('alamat_pelapor')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="tujuan_polsek" class="block mb-2 text-sm font-medium text-gray-700">Tujuan Polsek</label>
                        <select id="tujuan_polsek" name="tujuan_polsek" class="w-full p-3 rounded-lg border @error('tujuan_polsek') border-red-500 @else border-gray-300 @enderror" required>
                            <option value="Polres Kota Gorontalo" @if(old('tujuan_polsek', $pengaduan->tujuan_polsek) == 'Polres Kota Gorontalo') selected @endif>Polres Kota Gorontalo</option>
                        </select>
                        @error('tujuan_polsek')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="isi_laporan" class="block mb-2 text-sm font-medium text-gray-700">Isi Laporan</label>
                        <textarea id="isi_laporan" name="isi_laporan" rows="5" class="w-full p-3 rounded-lg border @error('isi_laporan') border-red-500 @else border-gray-300 @enderror" required>{{ old('isi_laporan', $pengaduan->isi_laporan) }}</textarea>
                        @error('isi_laporan')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">Lokasi Kejadian</label>
                        <div id="map" class="rounded-lg border border-gray-300"></div>
                        <p class="mt-2 text-sm text-gray-500">Koordinat Terpilih: <span id="koordinat" class="font-semibold">{{ $pengaduan->latitude }}, {{ $pengaduan->longitude }}</span></p>
                        <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude', $pengaduan->latitude) }}" required>
                        <input type="hidden" name="longitude" id="longitude" value="{{ old('longitude', $pengaduan->longitude) }}" required>
                    </div>

                    <div>
                        <button type="submit" class="w-full px-8 py-3.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700">
                            Kirim Perbaikan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil koordinat awal dari data pengaduan
            const initialLat = {{ old('latitude', $pengaduan->latitude) }};
            const initialLng = {{ old('longitude', $pengaduan->longitude) }};

            // Inisialisasi peta dan pusatkan ke koordinat awal
            const map = L.map('map').setView([initialLat, initialLng], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            let marker;

            // Fungsi untuk mengupdate input hidden dan teks koordinat
            function updateCoordinates(latlng) {
                document.getElementById('latitude').value = latlng.lat;
                document.getElementById('longitude').value = latlng.lng;
                document.getElementById('koordinat').textContent = `${latlng.lat.toFixed(6)}, ${latlng.lng.toFixed(6)}`;
            }

            // Fungsi untuk menempatkan atau memindahkan marker
            function placeMarker(latlng) {
                if (marker) {
                    marker.setLatLng(latlng);
                } else {
                    marker = L.marker(latlng, {
                        draggable: true
                    }).addTo(map);
                    // Tambahkan event listener saat marker selesai digeser
                    marker.on('dragend', (event) => updateCoordinates(event.target.getLatLng()));
                }
                updateCoordinates(latlng);
                map.panTo(latlng); // Geser peta ke lokasi marker
            }

            // Langsung tempatkan marker di lokasi awal saat halaman dimuat
            placeMarker({ lat: initialLat, lng: initialLng });

            // Tambahkan event listener untuk klik di peta
            map.on('click', (e) => placeMarker(e.latlng));
        });
    </script>
@endpush
</x-guest-layout>