{{-- resources/views/reskrim/surat-pernyataan/create.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat Surat Pernyataan untuk Laporan #{{ $pengaduan->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form id="suratPernyataanForm" action="{{ route('reskrim.surat-pernyataan.store', $pengaduan->id) }}" method="POST" 
                          x-data="{ 
                            pihak: [
                                { nama: '', ttl: '', pekerjaan: '', alamat: '', agama: '' }, 
                                { nama: '', ttl: '', pekerjaan: '', alamat: '', agama: '' }
                            ],
                            maxPihak: 4,
                            addPihak() {
                                if (this.pihak.length < this.maxPihak) {
                                    this.pihak.push({ nama: '', ttl: '', pekerjaan: '', alamat: '', agama: '' });
                                }
                            },
                            removePihak(index) {
                                this.pihak.splice(index, 1);
                            }
                          }">
                        @csrf
                        <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">

                        <div class="space-y-8">
                            {{-- Blok Pihak Terlibat --}}
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Pihak yang Terlibat</h3>
                                <div class="space-y-6">
                                    <template x-for="(p, index) in pihak" :key="index">
                                        <div class="border border-gray-200 p-4 rounded-lg relative">
                                            <div class="flex justify-between items-center mb-2">
                                                <h4 class="font-semibold text-gray-700" x-text="'Pihak ke-' + (index + 1)"></h4>
                                                <button type="button" @click="removePihak(index)" x-show="index > 1" class="text-red-500 hover:text-red-700 text-sm">Hapus</button>
                                            </div>

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label :for="'nama-' + index" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                                    <input type="text" :name="'pihak['+index+'][nama]'" :id="'nama-' + index" x-model="p.nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                                </div>
                                                <div>
                                                    <label :for="'ttl-' + index" class="block text-sm font-medium text-gray-700">Tempat, Tanggal Lahir</label>
                                                    <input type="text" :name="'pihak['+index+'][ttl]'" :id="'ttl-' + index" x-model="p.ttl" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                                </div>
                                                <div>
                                                    <label :for="'pekerjaan-' + index" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                                                    <input type="text" :name="'pihak['+index+'][pekerjaan]'" :id="'pekerjaan-' + index" x-model="p.pekerjaan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                                </div>
                                                {{-- [PENAMBAHAN] Field Agama --}}
                                                <div>
                                                    <label :for="'agama-' + index" class="block text-sm font-medium text-gray-700">Agama</label>
                                                    <input type="text" :name="'pihak['+index+'][agama]'" :id="'agama-' + index" x-model="p.agama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                                </div>
                                                <div class="md:col-span-2">
                                                    <label :for="'alamat-' + index" class="block text-sm font-medium text-gray-700">Alamat</label>
                                                    <textarea :name="'pihak['+index+'][alamat]'" :id="'alamat-' + index" x-model="p.alamat" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                                <button type="button" @click="addPihak" :disabled="pihak.length >= maxPihak" class="mt-4 text-sm text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:cursor-not-allowed">
                                    + Tambah Pihak Lain
                                </button>
                            </div>

                            {{-- Isi Pernyataan --}}
                            <div>
                                <label for="isi_pernyataan" class="block text-sm font-medium text-gray-700">Isi Pernyataan Bersama</label>
                                <textarea id="isi_pernyataan" name="isi_pernyataan" rows="8" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('isi_pernyataan') }}</textarea>
                            </div>

                            {{-- Tempat Dibuat --}}
                            <div>
                                <label for="tempat_dibuat" class="block text-sm font-medium text-gray-700">Tempat Surat Dibuat</label>
                                <input type="text" id="tempat_dibuat" name="tempat_dibuat" value="{{ old('tempat_dibuat', 'Gorontalo') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                            </div>

                        </div>
                        
                        <div class="mt-8 flex justify-end space-x-4">
                            <button type="button"
                                    onclick="previewSurat()"
                                    class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                                Preview Surat
                            </button>
                            <button type="submit"
                                    onclick="submitUntukSimpan()"
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Simpan Surat Pernyataan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script>
        function previewSurat() {
            const form = document.getElementById('suratPernyataanForm');
            form.target = '_blank';
            form.action = '{{ route("reskrim.surat-pernyataan.preview") }}';
            form.submit();
        }

        function submitUntukSimpan() {
            const form = document.getElementById('suratPernyataanForm');
            form.target = '_self';
            form.action = '{{ route("reskrim.surat-pernyataan.store", $pengaduan->id) }}';
        }
    </script>
    @endpush
</x-app-layout>