<x-guest-layout>
    <section class="py-20 px-10 bg-white">
        <div class="max-w-xl mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-blue-700">Verifikasi Identitas Anda</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    Untuk keamanan, silakan masukkan kembali NIK yang Anda gunakan saat melapor untuk melanjutkan proses
                    perbaikan laporan.
                </p>
            </div>

            <div class="glass p-8 rounded-2xl">
                {{-- resources/views/lacak/verifikasi.blade.php --}}

                <form action="{{ route('laporan.verifikasi.handle', $pengaduan->id) }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="nomor_tiket" class="block mb-2 text-sm font-medium text-gray-700">Nomor Tiket</label>
                        <input type="text" id="nomor_tiket" name="nomor_tiket"
                            class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Ketik nomor tiket Anda di sini..." required>

                        {{-- Menambahkan pesan error untuk konsistensi --}}
                        @error('nomor_tiket')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Verifikasi & Lanjutkan
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- [PERBAIKAN] Menambahkan skrip SweetAlert untuk session 'error' --}}
    @if (session('error'))
        <script>
            // Pastikan Anda sudah memuat library SweetAlert di layout utama (guest.blade.php)
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
            });
        </script>
    @endif
</x-guest-layout>
