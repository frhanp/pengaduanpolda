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
                            {{-- Bagian Detail STPL (Nomor & Tanggal) --}}
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Detail STPL</h3>
                                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="tanggal_dibuat" class="block font-medium text-sm text-gray-700">Tanggal Dibuat</label>
                                        <input type="date" id="tanggal_dibuat" name="tanggal_dibuat" value="{{ old('tanggal_dibuat', date('Y-m-d')) }}" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('tanggal_dibuat')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    <div class="space-y-2">
                                        <label class="block font-medium text-sm text-gray-700">Opsi Nomor STPL</label>
                                        <div class="flex items-center space-x-6">
                                            <label class="inline-flex items-center"><input type="radio" x-model="nomor_option" name="nomor_stpl_option" value="otomatis" class="form-radio"><span class="ml-2">Otomatis</span></label>
                                            <label class="inline-flex items-center"><input type="radio" x-model="nomor_option" name="nomor_stpl_option" value="manual" class="form-radio"><span class="ml-2">Manual</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="nomor_option === 'manual'" x-cloak class="mt-4">
                                    <label for="nomor_stpl" class="block font-medium text-sm text-gray-700">Nomor STPL Manual</label>
                                    <input type="text" id="nomor_stpl" name="nomor_stpl" value="{{ old('nomor_stpl') }}" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" placeholder="Contoh: STPL/123/VII/2025/SPKT">
                                    @error('nomor_stpl')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            {{-- [PENAMBAHAN] Bagian Detail Kejadian --}}
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Detail Kejadian</h3>
                                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="tindak_pidana" class="block font-medium text-sm text-gray-700">Tindak Pidana</label>
                                        <input type="text" id="tindak_pidana" name="tindak_pidana" value="{{ old('tindak_pidana') }}" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('tindak_pidana')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    <div>
                                        <label for="pasal_dilanggar" class="block font-medium text-sm text-gray-700">Pasal yang Dilanggar</label>
                                        <input type="text" id="pasal_dilanggar" name="pasal_dilanggar" value="{{ old('pasal_dilanggar') }}" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('pasal_dilanggar')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    <div>
                                        <label for="hari_kejadian" class="block font-medium text-sm text-gray-700">Hari Kejadian</label>
                                        <input type="text" id="hari_kejadian" name="hari_kejadian" value="{{ old('hari_kejadian') }}" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('hari_kejadian')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    <div>
                                        <label for="tanggal_kejadian" class="block font-medium text-sm text-gray-700">Tanggal Kejadian</label>
                                        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('tanggal_kejadian')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="tempat_kejadian" class="block font-medium text-sm text-gray-700">Tempat Kejadian Perkara (TKP)</label>
                                        <textarea id="tempat_kejadian" name="tempat_kejadian" rows="3" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>{{ old('tempat_kejadian') }}</textarea>
                                        @error('tempat_kejadian')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                                    </div>
                                </div>
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