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
            {{ __('Detail Tugas Laporan #') . $pengaduan->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('success') }}</p>
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
                {{-- Kolom Kiri: Detail Laporan & Dokumen Pendukung --}}
                <div class="md:col-span-2 space-y-6">
                    {{-- Kartu Detail Laporan (tidak berubah) --}}
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 space-y-4">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Data Pelapor</h3>
                                <dl class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-2 text-sm">
                                    <dt class="font-medium text-gray-500">Nama</dt>
                                    <dd class="text-gray-900">{{ $pengaduan->nama_pelapor }}</dd>
                                    <dt class="font-medium text-gray-500">No. HP</dt>
                                    <dd class="text-gray-900">{{ $pengaduan->no_hp_pelapor }}</dd>
                                    <dt class="font-medium text-gray-500">Umur</dt>
                                    <dd class="text-gray-900">{{ $pengaduan->umur_pelapor ?? '-' }}</dd>
                                    <dt class="font-medium text-gray-500">Pekerjaan</dt>
                                    <dd class="text-gray-900">{{ $pengaduan->pekerjaan_pelapor ?? '-' }}</dd>
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

                    {{-- [PENAMBAHAN] Kartu Dokumen Pendukung --}}
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Dokumen Pendukung</h3>

                            {{-- Daftar Dokumen yang Sudah Di-upload --}}
                            <div class="space-y-3 mb-6">
                                @forelse ($pengaduan->suratPernyataans as $surat)
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-md border">
                                        <div>
                                            <p class="font-semibold text-gray-700">{{ $surat->judul }}</p>
                                            <p class="text-xs text-gray-500">Diunggah oleh {{ $surat->uploader->name }}
                                                pada {{ $surat->created_at->format('d M Y') }}</p>
                                        </div>
                                        <a href="{{ route('reskrim.surat.download', $surat->id) }}"
                                            class="text-sm text-indigo-600 hover:text-indigo-900 font-semibold">Download</a>
                                    </div>
                                @empty
                                    <div class="text-center text-sm text-gray-500 py-4">Belum ada dokumen yang diunggah.
                                    </div>
                                @endforelse
                            </div>

                            <hr class="my-6">

                            {{-- Form Upload Dokumen Baru --}}
                            <h4 class="text-md font-semibold text-gray-700 mb-2">Upload Dokumen Baru</h4>
                            <form action="{{ route('reskrim.tugas.surat.store', $pengaduan->id) }}" method="POST"
                                enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                <div>
                                    <label for="judul"
                                        class="block text-sm font-medium text-gray-700">Judul/Deskripsi Dokumen</label>
                                    <input type="text" name="judul" id="judul"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                    @error('judul')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="file_pernyataan" class="block text-sm font-medium text-gray-700">Pilih
                                        File (PDF, JPG, PNG)</label>
                                    <input type="file" name="file_pernyataan" id="file_pernyataan"
                                        class="mt-1 block w-full text-sm" required>
                                    @error('file_pernyataan')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit"
                                        class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition">Upload
                                        Dokumen</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Status & Aksi (tidak berubah) --}}
                <div class="space-y-6">
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Status & Tindak Lanjut</h3>
                        <p class="text-sm text-gray-500 mb-1">Status Saat Ini:</p>
                        @php
                            $statusClass = '';
                            if ($pengaduan->status == 'Diteruskan ke Reskrim') {
                                $statusClass = 'bg-indigo-100 text-indigo-800';
                            } elseif ($pengaduan->status == 'Diproses') {
                                $statusClass = 'bg-purple-100 text-purple-800';
                            } elseif ($pengaduan->status == 'Diteruskan ke Penyidik') {
                                $statusClass = 'bg-teal-100 text-teal-800';
                            }
                        @endphp
                        <span
                            class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $statusClass }}">
                            {{ $pengaduan->status }}
                        </span>
                    </div>

                    @if ($pengaduan->status !== 'Selesai')
                        <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Update Status Proses</h3>
                            <form action="{{ route('reskrim.tugas.updateStatus', $pengaduan) }}" method="POST">
                                @csrf
                                <label for="status" class="text-sm font-medium text-gray-700">Ubah Status
                                    Menjadi</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                    {{-- [PERUBAHAN] Mengubah opsi kembali ke 'Selesai' --}}
                                    <option value="Diproses" @if ($pengaduan->status == 'Diproses') selected @endif>Diproses
                                    </option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                                <button type="submit"
                                    class="mt-4 w-full bg-purple-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-purple-600">Update
                                    Status</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const lat = {{ $pengaduan->latitude ?? 'null' }};
                const lng = {{ $pengaduan->longitude ?? 'null' }};

                if (lat && lng) {
                    const map = L.map('map').setView([lat, lng], 15);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© OpenStreetMap contributors'
                    }).addTo(map);
                    L.marker([lat, lng]).addTo(map).bindPopup('Lokasi kejadian yang dilaporkan.');
                } else {
                    document.getElementById('map').innerHTML =
                        '<div class="flex items-center justify-center h-full bg-gray-100 text-gray-500">Lokasi tidak ditandai oleh pelapor.</div>';
                }
            });
        </script>
    @endpush
</x-app-layout>
