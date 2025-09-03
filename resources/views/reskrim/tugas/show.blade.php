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
                                    <dt class="text-sm font-medium text-gray-500">Email Pelapor</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $pengaduan->email_pelapor }}</dd>
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

                    {{-- [PENAMBAHAN] Surat Pernyataan --}}
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-bold text-gray-800">Surat Pernyataan</h3>
                                <a href="{{ route('reskrim.surat-pernyataan.create', ['pengaduan_id' => $pengaduan->id]) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Buat Surat Baru
                                </a>
                            </div>
                    
                            {{-- Daftar Surat yang Sudah Dibuat --}}
                            <div class="space-y-3">
                                @forelse ($pengaduan->suratPernyataan as $surat)
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-md border">
                                        <div>
                                            <p class="font-semibold text-gray-700">Surat Pernyataan #{{ $surat->id }}</p>
                                            <p class="text-xs text-gray-500">Dibuat oleh {{ $surat->uploader->name }}
                                                pada {{ $surat->created_at->format('d M Y') }}</p>
                                        </div>
                                        <a href="{{ route('reskrim.surat-pernyataan.download', $surat->id) }}"
                                            class="text-sm text-indigo-600 hover:text-indigo-900 font-semibold" target="_blank">Download</a>
                                    </div>
                                @empty
                                    <div class="text-center text-sm text-gray-500 py-4">
                                        Belum ada surat pernyataan yang dibuat.
                                    </div>
                                @endforelse
                            </div>
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
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Foto KTP Pelapor</h3>
                        @if ($pengaduan->foto_ktp)
                            <a href="{{ asset('storage/' . $pengaduan->foto_ktp) }}" target="_blank">
                                <img src="{{ asset('storage/' . $pengaduan->foto_ktp) }}" alt="Foto KTP"
                                    class="w-full h-auto rounded-lg border hover:opacity-90 transition">
                            </a>
                        @else
                            <p class="text-gray-500 text-sm">Tidak ada foto KTP yang diunggah.</p>
                        @endif
                    </div>
                    @if ($pengaduan->bukti->isNotEmpty())
                        <div class="md:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">Bukti Tambahan</dt>
                            <dd class="mt-2 text-sm text-gray-900">
                                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                    @foreach ($pengaduan->bukti as $item)
                                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                            <div class="w-0 flex-1 flex items-center">
                                                {{-- Icon Lampiran --}}
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.497a1.5 1.5 0 012.121-2.121l-1.414-1.414a1 1 0 111.414-1.414l1.414 1.414a3.5 3.5 0 11-4.95-4.95l.497-.497h.001l7-7a1 1 0 011.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span
                                                    class="ml-2 flex-1 w-0 truncate">{{ basename($item->file_path) }}</span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank"
                                                    class="font-medium text-blue-600 hover:text-blue-500">Lihat</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </dd>
                        </div>
                    @endif

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
