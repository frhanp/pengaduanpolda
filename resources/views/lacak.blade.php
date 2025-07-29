{{-- File: resources/views/lacak.blade.php --}}

<x-guest-layout>
    <section class="py-20 px-10 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-700">Lacak Aduan Anda</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-lg">
                    Masukkan nama lengkap yang Anda gunakan saat melapor untuk melihat status aduan Anda.
                </p>
            </div>

            <div class="glass p-8 rounded-2xl mb-8">
                <form action="{{ route('lacak.aduan') }}" method="GET" class="flex items-center gap-4">
                    <div class="flex-grow">
                        <label for="nama_pelapor" class="sr-only">Nama Pelapor</label>
                        <input type="text" id="nama_pelapor" name="nama_pelapor"
                            value="{{ request('nama_pelapor') }}"
                            class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Ketik nama lengkap Anda di sini..." required>
                    </div>
                    <button type="submit"
                        class="px-6 py-3 font-semibold text-white bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 transition">
                        Cari Aduan
                    </button>
                </form>
            </div>

            @if (request()->filled('nama_pelapor'))
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Hasil Pencarian untuk "{{ request('nama_pelapor') }}"
                </h3>
                <div class="space-y-4">
                    @forelse ($pengaduans as $pengaduan)
                        {{-- Ganti seluruh isi dari div hasil pencarian --}}
                        <div
                            class="bg-white p-6 rounded-lg shadow-md border-l-4 
@if ($pengaduan->status == 'Diteruskan ke Penyidik' || $pengaduan->status == 'Selesai') border-green-500
@elseif($pengaduan->status == 'Diproses' || $pengaduan->status == 'Diteruskan ke Reskrim') border-purple-500
@elseif($pengaduan->status == 'Diverifikasi') border-yellow-500
@elseif($pengaduan->status == 'Dikembalikan') border-red-500 {{-- [PENAMBAHAN] Warna untuk status Dikembalikan --}}
@else border-blue-500 @endif">

                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm text-gray-500">ID Laporan: #{{ $pengaduan->id }}</p>
                                    <p class="text-lg font-semibold text-gray-800 mt-2">
                                        {{ Str::limit($pengaduan->isi_laporan, 100) }}</p>
                                    <p class="text-sm text-gray-500 mt-1">Dilaporkan pada:
                                        {{ $pengaduan->created_at->format('d M Y, H:i') }}</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-500 mb-1">Status:</p>
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
                                        } elseif ($pengaduan->status == 'Diteruskan ke Penyidik') {
                                            $statusClass = 'bg-teal-100 text-teal-800';
                                        } elseif ($pengaduan->status == 'Dikembalikan') {
                                            $statusClass = 'bg-red-100 text-red-800';
                                        }
                                        // [PENAMBAHAN] Warna untuk status Dikembalikan
                                        elseif ($pengaduan->status == 'Selesai') {
                                            $statusClass = 'bg-green-100 text-green-800';
                                        }
                                    @endphp
                                    <span
                                        class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $statusClass }}">
                                        {{ $pengaduan->status }}
                                    </span>
                                </div>
                            </div>

                            {{-- [PENAMBAHAN] Tampilkan catatan jika laporan dikembalikan --}}
                            @if ($pengaduan->status == 'Dikembalikan' && $pengaduan->catatan_pengembalian)
                                <div class="mt-4 pt-4 border-t border-gray-200">
                                    <p class="text-sm font-bold text-red-700">Catatan dari Petugas:</p>
                                    <p class="text-sm text-gray-600 italic">"{{ $pengaduan->catatan_pengembalian }}"</p>
                                </div>
                                <div class="mt-4 text-right">
                                    <a href="{{ route('laporan.verifikasi.form', $pengaduan->id) }}" class="inline-block px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                                        Perbaiki Laporan Ini
                                    </a>
                                </div>
                            @endif
                        </div>
                    @empty
                        <div class="text-center py-10 bg-gray-50 rounded-lg">
                            <p class="text-gray-600">Tidak ada aduan yang ditemukan dengan nama tersebut.</p>
                        </div>
                    @endforelse
                </div>
            @endif
        </div>
    </section>
</x-guest-layout>
