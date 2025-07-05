<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat STPL untuk Laporan: {{ $pengaduan->nama_pelapor }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Form ini mengarah ke route 'admin.stpl.store' --}}
                    <form action="{{ route('admin.stpl.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">

                        <div class="space-y-6">
                            <!-- Detail Laporan (Read-only) -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Data Laporan Terkait</h3>
                                <div class="mt-2 p-4 bg-gray-50 rounded-md border">
                                    <p><strong>Pelapor:</strong> {{ $pengaduan->nama_pelapor }}</p>
                                    <p><strong>NIK:</strong> {{ $pengaduan->nik }}</p>
                                </div>
                            </div>
                            
                            <!-- Input untuk STPL -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Detail STPL</h3>
                                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="nomor_stpl" class="block font-medium text-sm text-gray-700">Nomor STPL</label>
                                        <input type="text" id="nomor_stpl" name="nomor_stpl" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    </div>
                                    <div>
                                        <label for="tanggal_dibuat" class="block font-medium text-sm text-gray-700">Tanggal Dibuat</label>
                                        <input type="date" id="tanggal_dibuat" name="tanggal_dibuat" value="{{ date('Y-m-d') }}" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-6">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
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