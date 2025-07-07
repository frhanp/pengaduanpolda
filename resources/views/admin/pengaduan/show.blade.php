{{-- Menambahkan Aset Leaflet di Halaman Ini Saja --}}
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 300px;
            z-index: 10;
        }
    </style>
@endpush
@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Laporan #') . $pengaduan->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Notifikasi Sukses/Error --}}
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Kolom Kiri: Detail Laporan --}}
                <div class="md:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 space-y-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Data Pelapor</h3>
                            <dl class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-2 text-sm">
                                <dt class="font-medium text-gray-500">Nama</dt>
                                <dd class="text-gray-900">{{ $pengaduan->nama_pelapor }}</dd>
                                <dt class="font-medium text-gray-500">No. HP</dt>
                                <dd class="text-gray-900">{{ $pengaduan->no_hp_pelapor }}</dd>
                                <dt class="font-medium text-gray-500">NIK</dt>
                                <dd class="text-gray-900">{{ $pengaduan->nik ?? '-' }}</dd>
                                <dt class="font-medium text-gray-500">Umur</dt>
                                <dd class="text-gray-900">{{ $pengaduan->umur_pelapor ?? '-' }}</dd>
                                <dt class="font-medium text-gray-500 col-span-2">Alamat</dt>
                                <dd class="text-gray-900 col-span-2">{{ $pengaduan->alamat_pelapor ?? '-' }}</dd>
                            </dl>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Isi Laporan</h3>
                            <p class="mt-2 text-sm text-gray-700 leading-relaxed">{{ $pengaduan->isi_laporan }}</p>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Lokasi Kejadian</h3>
                            <div id="map" class="mt-2 rounded-lg"></div>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Status & Aksi --}}
                <div class="space-y-6">
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Foto KTP Pelapor</h3>
                        @if ($pengaduan->foto_ktp)
                            {{-- Foto bisa diklik untuk melihat ukuran penuh di tab baru --}}
                            <a href="{{ asset('storage/' . $pengaduan->foto_ktp) }}" target="_blank">
                                <img src="{{ asset('storage/' . $pengaduan->foto_ktp) }}" alt="Foto KTP"
                                    class="w-full h-auto rounded-lg border hover:opacity-90 transition">
                            </a>
                        @else
                            <p class="text-gray-500 text-sm">Tidak ada foto KTP yang diunggah.</p>
                        @endif
                    </div>
                    {{-- Box Status --}}
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Status & Tindak Lanjut</h3>
                        <p class="text-sm text-gray-500 mb-1">Status Saat Ini:</p>
                        @php
                            $statusClass = '';
                            if ($pengaduan->status == 'Baru') {
                                $statusClass = 'bg-blue-100 text-blue-800';
                            } elseif ($pengaduan->status == 'Diverifikasi') {
                                $statusClass = 'bg-yellow-100 text-yellow-800';
                            } elseif ($pengaduan->status == 'Diteruskan ke Reskrim') {
                                $statusClass = 'bg-indigo-100 text-indigo-800';
                            } elseif ($pengaduan->status == 'Diproses') {
                                $statusClass = 'bg-purple-100 text-purple-800';
                            } elseif ($pengaduan->status == 'Selesai') {
                                $statusClass = 'bg-green-100 text-green-800';
                            }
                        @endphp
                        <span
                            class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $statusClass }}">
                            {{ $pengaduan->status }}
                        </span>
                        {{-- Anda perlu mendefinisikan relasi 'verifier' dan 'assignee' di model Pengaduan agar ini berfungsi --}}
                        <p class="text-xs text-gray-500 mt-4">Diverifikasi oleh:
                            {{ $pengaduan->verifier->name ?? 'Belum ada' }}</p>
                        <p class="text-xs text-gray-500">Diteruskan ke: {{ $pengaduan->assignee->name ?? 'Belum ada' }}
                        </p>
                    </div>

                    {{-- Form Aksi Verifikasi --}}
                    @if ($pengaduan->status === 'Baru')
                        <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                            {{-- [PERBAIKAN] Menggunakan nama rute yang benar --}}
                            <form action="{{ route('admin.pengaduan.verify', $pengaduan) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600 transition">Verifikasi
                                    Laporan Ini</button>
                            </form>
                        </div>
                    @endif

                    {{-- Form Aksi Teruskan ke Reskrim --}}
                    @if ($pengaduan->status === 'Diverifikasi')
                        {{-- Cek apakah STPL sudah dibuat --}}
                        @if (!$pengaduan->stpl)
                            {{-- Jika BELUM, tampilkan tombol Buat STPL --}}
                            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                                <a href="{{ route('admin.stpl.create', $pengaduan->id) }}" class="block w-full text-center px-4 py-2 bg-green-600 border rounded-md font-semibold text-xs text-white uppercase hover:bg-green-700">
                                    Langkah Selanjutnya: Buat STPL
                                </a>
                            </div>
                        @else
                            {{-- Jika STPL SUDAH ADA, cek apakah sudah diteruskan --}}
                            @if (!$pengaduan->assigned_to_reskrim_id)
                                {{-- Jika BELUM diteruskan, tampilkan form Teruskan ke Reskrim --}}
                                <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Teruskan Laporan</h3>
                                    <form action="{{ route('admin.pengaduan.forward', $pengaduan) }}" method="POST">
                                        @csrf
                                        <label for="assigned_to_reskrim_id" class="text-sm font-medium text-gray-700">Pilih Anggota Reskrim</label>
                                        <select name="assigned_to_reskrim_id" id="assigned_to_reskrim_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                            <option value="">-- Pilih Anggota --</option>
                                            @foreach ($reskrimUsers as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="mt-4 w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-600 transition">Teruskan ke Reskrim</button>
                                    </form>
                                </div>
                            @endif
                            {{-- Tampilkan info STPL sudah dibuat --}}
                            <div class="bg-white p-6 shadow-sm sm:rounded-lg text-center">
                                <p class="text-sm font-medium text-green-700">✔ STPL sudah dibuat.</p>
                                <a href="{{ route('admin.stpl.download', $pengaduan->stpl->id) }}" class="text-indigo-600 hover:text-indigo-900 text-sm">
                                    Cetak Ulang
                                </a>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Logika untuk menampilkan peta lokasi (tidak berubah)
            const lat = {{ $pengaduan->latitude ?? 'null' }};
            const lng = {{ $pengaduan->longitude ?? 'null' }};

            if (lat && lng) {
                const map = L.map('map').setView([lat, lng], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                L.marker([lat, lng]).addTo(map)
                    .bindPopup('Lokasi kejadian yang dilaporkan.');
            } else {
                document.getElementById('map').innerHTML = '<div class="flex items-center justify-center h-full bg-gray-100 text-gray-500">Lokasi tidak ditandai oleh pelapor.</div>';
            }

            // [PENAMBAHAN] Logika untuk memicu download PDF secara otomatis
            @if(session('stpl_download_url'))
                // Buat jeda singkat agar pengguna sempat melihat notifikasi sukses
                setTimeout(function() {
                    // Arahkan browser ke URL download, ini akan memulai unduhan
                    window.location.href = '{{ session('stpl_download_url') }}';
                }, 1500); // Jeda 1.5 detik
            @endif
        });
    </script>
@endpush
</x-app-layout>
