<!-- Section Lapor -->
<section id="lapor" class="py-20 px-10 bg-white">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-blue-700 animate-fadeInUp">Buat Laporan Anda</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-lg">Isi formulir di bawah ini dengan lengkap dan benar. Setiap laporan dari Anda sangat berarti bagi kami.</p>
        </div>

        

        

        <div class="glass p-8 rounded-2xl">
            {{-- [PENTING] Menambahkan enctype agar file bisa di-upload --}}
            <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div class="grid md:grid-cols-2 gap-6">
                    <div><label for="nama_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Nama Lengkap</label><input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition" required></div>
                    <div><label for="no_hp_pelapor" class="block mb-2 text-sm font-medium text-gray-700">No. Handphone</label><input type="tel" id="no_hp_pelapor" name="no_hp_pelapor" value="{{ old('no_hp_pelapor') }}" class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition" required></div>
                    
                    {{-- [PENAMBAHAN] Field untuk NIK --}}
                    <div><label for="nik" class="block mb-2 text-sm font-medium text-gray-700">NIK</label><input type="text" id="nik" name="nik" value="{{ old('nik') }}" class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition" required></div>
                    
                    {{-- [PENAMBAHAN] Field untuk Upload Foto KTP --}}
                    <div><label for="foto_ktp" class="block mb-2 text-sm font-medium text-gray-700">Upload Foto KTP</label><input type="file" id="foto_ktp" name="foto_ktp" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required></div>

                    <div><label for="umur_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Umur (Opsional)</label><input type="number" id="umur_pelapor" name="umur_pelapor" value="{{ old('umur_pelapor') }}" class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition"></div>
                    <div><label for="pekerjaan_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Pekerjaan (Opsional)</label><input type="text" id="pekerjaan_pelapor" name="pekerjaan_pelapor" value="{{ old('pekerjaan_pelapor') }}" class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition"></div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2"><label for="alamat_pelapor" class="text-sm font-medium text-gray-700">Alamat</label><button type="button" id="get-location-btn" class="flex items-center text-xs text-blue-600 font-semibold hover:text-blue-800 transition"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>Gunakan Lokasi Saya</button></div>
                    <textarea id="alamat_pelapor" name="alamat_pelapor" rows="3" class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Ketik alamat atau gunakan lokasi saat ini...">{{ old('alamat_pelapor') }}</textarea>
                    <p id="location-status" class="text-xs text-gray-500 mt-1 h-4"></p>
                </div>

                <div><label for="tujuan_polsek" class="block mb-2 text-sm font-medium text-gray-700">Tujuan Polsek</label><select id="tujuan_polsek" name="tujuan_polsek" class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition" required><option value="" disabled selected>Pilih Polsek Tujuan</option><option value="Polsek Kota Utara">Polsek Kota Utara</option><option value="Polsek Kota Selatan">Polsek Kota Selatan</option><option value="Polsek Kota Timur">Polsek Kota Timur</option><option value="Polsek Kota Barat">Polsek Kota Barat</option><option value="Polsek Dungingi">Polsek Dungingi</option><option value="Polsek Dumbo Raya">Polsek Dumbo Raya</option><option value="Polsek Hulonthalangi">Polsek Hulonthalangi</option><option value="Polsek Kota Tengah">Polsek Kota Tengah</option><option value="Polsek Sipatana">Polsek Sipatana</option></select></div>
                <div><label for="isi_laporan" class="block mb-2 text-sm font-medium text-gray-700">Isi Laporan</label><textarea id="isi_laporan" name="isi_laporan" rows="5" class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition" required>{{ old('isi_laporan') }}</textarea></div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Tandai Lokasi Kejadian di Peta</label>
                    <div id="map" class="rounded-lg border border-gray-300" data-laporan="{{ htmlspecialchars(json_encode($laporan ?? [])) }}"></div>
                    <p class="mt-2 text-sm text-gray-500">Koordinat Terpilih: <span id="koordinat" class="font-semibold">Belum dipilih</span></p>
                    <input type="hidden" name="latitude" id="latitude" required><input type="hidden" name="longitude" id="longitude" required>
                </div>
                <div><button type="submit" class="w-full px-8 py-3.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg transition transform hover:bg-blue-700 hover:scale-105">Kirim Laporan</button></div>
            </form>
        </div>
    </div>
</section>