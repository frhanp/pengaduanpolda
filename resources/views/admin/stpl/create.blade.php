<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat STPL untuk Laporan: {{ $pengaduan->nama_pelapor }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" x-data="{ nomor_option: 'otomatis' }">
                    <form action="{{ route('admin.stpl.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">
                        <div class="space-y-6">
                            <div>
                                <label for="tanggal_dibuat" class="block font-medium text-sm text-gray-700">Tanggal Dibuat</label>
                                <input type="date" id="tanggal_dibuat" name="tanggal_dibuat" value="{{ date('Y-m-d') }}" class="block mt-1 w-full md:w-1/2 border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <div>
                                <label class="block font-medium text-sm text-gray-700">Opsi Nomor STPL</label>
                                <div class="mt-2 space-x-6">
                                    <label class="inline-flex items-center">
                                        <input type="radio" x-model="nomor_option" name="nomor_stpl_option" value="otomatis" class="form-radio">
                                        <span class="ml-2">Otomatis</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" x-model="nomor_option" name="nomor_stpl_option" value="manual" class="form-radio">
                                        <span class="ml-2">Manual</span>
                                    </label>
                                </div>
                            </div>

                            <div x-show="nomor_option === 'manual'" x-cloak>
                                <label for="nomor_stpl" class="block font-medium text-sm text-gray-700">Nomor STPL Manual</label>
                                <input type="text" id="nomor_stpl" name="nomor_stpl" class="block mt-1 w-full md:w-1/2 border-gray-300 rounded-md shadow-sm" placeholder="Contoh: STPL/123/VII/2025/SPKT">
                            </div>

                            <div class="flex items-center justify-end mt-6">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border rounded-md font-semibold text-xs text-white uppercase hover:bg-blue-700">
                                    Simpan dan Unduh STPL
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>