<x-guest-layout>
    <section class="py-20 px-10 bg-white">
        <div class="max-w-xl mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-blue-700">Verifikasi Identitas Anda</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    Untuk keamanan, silakan masukkan kembali NIK yang Anda gunakan saat melapor untuk melanjutkan proses perbaikan laporan.
                </p>
            </div>

            <div class="glass p-8 rounded-2xl">
                <form action="{{ route('laporan.verifikasi.handle', $pengaduan->id) }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="nik" class="block mb-2 text-sm font-medium text-gray-700">Nomor Induk Kependudukan (NIK)</label>
                        <input type="text" id="nik" name="nik"
                               class="w-full p-3 bg-white/50 rounded-lg border @error('nik') border-red-500 @else border-gray-300 @enderror focus:ring-blue-500 focus:border-blue-500 transition"
                               placeholder="Masukkan 16 digit NIK Anda..." required>
                        {{-- Menampilkan error validasi NIK jika ada --}}
                        @error('nik')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                                class="w-full px-6 py-3 font-semibold text-white bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 transition">
                            Lanjutkan
                        </button>
                    </div>
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