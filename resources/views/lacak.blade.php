{{-- File: resources/views/lacak.blade.php --}}

<x-guest-layout>
    <section class="py-20 px-10 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 flex items-center justify-center gap-4 md:gap-8">

                {{-- Logo Kiri --}}
                <div class="flex-shrink-0">
                    {{-- [PERUBAHAN] Menambahkan class untuk membuat gambar menjadi lingkaran --}}
                    <img src="{{ asset('images/polreslogocowo.png') }}" alt="Logo Kiri"
                        class="h-16 w-16 md:h-24 md:w-24 object-cover rounded-full shadow-lg border-4 border-white/50">
                </div>

                {{-- Teks Judul --}}
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-700">Lacak Aduan Anda</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-lg">
                        Masukkan nama lengkap yang Anda gunakan saat melapor untuk melihat status aduan Anda.
                    </p>
                </div>

                {{-- Logo Kanan --}}
                <div class="flex-shrink-0">
                    {{-- [PERUBAHAN] Menambahkan class untuk membuat gambar menjadi lingkaran --}}
                    <img src="{{ asset('images/polreslogocewe.png') }}" alt="Logo Kanan"
                        class="h-16 w-16 md:h-24 md:w-24 object-cover rounded-full shadow-lg border-4 border-white/50">
                </div>

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

            {{-- Ganti seluruh blok ini dari @if sampai @endif --}}
            @if (request()->filled('nama_pelapor'))
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Hasil Pencarian untuk "{{ request('nama_pelapor') }}"
                </h3>

                @if ($pengaduans->isNotEmpty())
                    <div class="space-y-8">
                        @foreach ($pengaduans as $pengaduan)
                            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800">Nomor Tiket:
                                            {{ $pengaduan->nomor_tiket }}</h3>
                                        <p class="text-sm text-gray-500">Dilaporkan pada:
                                            {{ $pengaduan->created_at->format('d M Y, H:i') }}</p>
                                    </div>
                                    @if ($pengaduan->status == 'Dikembalikan')
                                        <a href="{{ route('laporan.verifikasi.form', $pengaduan->id) }}"
                                            class="text-sm bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg transition">
                                            Perbaiki Laporan
                                        </a>
                                    @endif
                                </div>
                                <hr class="my-4">

                                {{-- Timeline Riwayat Status --}}
                                <div class="relative border-l-2 border-blue-200 ml-3 mt-6">

                                    {{-- Loop untuk setiap riwayat status (sekarang yang terbaru di atas) --}}
                                    @foreach ($pengaduan->riwayatStatus as $riwayat)
                                        <div class="mb-8 ml-6">
                                            <span
                                                class="absolute flex items-center justify-center w-6 h-6 bg-blue-500 rounded-full -left-3 ring-8 ring-white">
                                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <h4 class="font-semibold text-gray-900">{{ $riwayat->status }}</h4>
                                            <time
                                                class="block mb-2 text-sm font-normal leading-none text-gray-400">{{ $riwayat->created_at->format('d M Y, H:i') }}</time>
                                            @if ($riwayat->catatan)
                                                <p class="text-base font-normal text-gray-600">{{ $riwayat->catatan }}
                                                </p>
                                            @endif
                                        </div>
                                    @endforeach

                                    {{-- Riwayat Awal (Saat Laporan Dibuat) SEKARANG DI BAWAH --}}
                                    <div class="mb-8 ml-6">
                                        <span
                                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-500 rounded-full -left-3 ring-8 ring-white">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <h4 class="font-semibold text-gray-900">Laporan Dibuat</h4>
                                        <time
                                            class="block mb-2 text-sm font-normal leading-none text-gray-400">{{ $pengaduan->created_at->format('d M Y, H:i') }}</time>
                                        <p class="text-base font-normal text-gray-600">Laporan Anda berhasil dikirim dan
                                            menunggu verifikasi admin.</p>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-10 bg-gray-50 rounded-lg">
                        <p class="text-gray-600">Tidak ada aduan yang ditemukan dengan nama tersebut.</p>
                    </div>
                @endif
            @endif
        </div>
    </section>
</x-guest-layout>
