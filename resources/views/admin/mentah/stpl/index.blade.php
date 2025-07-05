<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen STPL') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Halaman ini akan menampilkan daftar semua Surat Tanda Penerimaan Laporan (STPL) yang telah dibuat.</p>
                    {{-- Nanti di sini akan ada tabel data STPL --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>