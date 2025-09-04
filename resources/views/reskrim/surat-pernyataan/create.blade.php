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
                                // [PERUBAHAN] Memecah ttl menjadi tempat_lahir dan tanggal_lahir
                                { nama: '', tempat_lahir: '', tanggal_lahir: '', pekerjaan: '', alamat: '', agama: 'Islam' },
                                { nama: '', tempat_lahir: '', tanggal_lahir: '', pekerjaan: '', alamat: '', agama: 'Islam' }
                            ],
                            saksi: [],
                            isi: [''],
                            maxPihak: 4,
                            addPihak() {
                                if (this.pihak.length < this.maxPihak) { this.pihak.push({ nama: '', tempat_lahir: '', tanggal_lahir: '', pekerjaan: '', alamat: '', agama: 'Islam' }); }
                            },
                            removePihak(index) {
                                if (this.pihak.length > 2) { this.pihak.splice(index, 1); }
                            },
                            addSaksi() {
                                this.saksi.push({ nama: '' });
                            },
                            removeSaksi(index) {
                                this.saksi.splice(index, 1);
                            },
                            addPoin() {
                                this.isi.push('');
                            },
                            removePoin(index) {
                                if (this.isi.length > 1) { this.isi.splice(index, 1); }
                            }
                          }">
                        @csrf
                        <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">

                        <div class="space-y-8">
                            {{-- BAGIAN PIHAK TERLIBAT --}}
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Pihak yang Membuat Pernyataan</h3>
                                <div class="space-y-6">
                                    <template x-for="(p, index) in pihak" :key="'pihak-'+index">
                                        <div class="border border-gray-200 p-4 rounded-lg relative">
                                            <div class="flex justify-between items-center mb-2">
                                                <h4 class="font-semibold text-gray-700" x-text="'Pihak ke-' + (index + 1)"></h4>
                                                <button type="button" @click="removePihak(index)" x-show="index > 1" class="text-red-500 hover:text-red-700 text-sm">Hapus</button>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label :for="'pihak-nama-' + index" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                                    <input type="text" :name="'pihak['+index+'][nama]'" :id="'pihak-nama-' + index" x-model="p.nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                                </div>
                                                <div>
                                                    <label :for="'pihak-pekerjaan-' + index" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                                                    <input type="text" :name="'pihak['+index+'][pekerjaan]'" :id="'pihak-pekerjaan-' + index" x-model="p.pekerjaan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                                </div>
                                                {{-- [PERUBAHAN] Input Tempat Lahir --}}
                                                <div>
                                                    <label :for="'pihak-tempat-lahir-' + index" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                                                    <input type="text" :name="'pihak['+index+'][tempat_lahir]'" :id="'pihak-tempat-lahir-' + index" x-model="p.tempat_lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                                </div>
                                                {{-- [PERUBAHAN] Input Tanggal Lahir (Kalender) --}}
                                                <div>
                                                    <label :for="'pihak-tanggal-lahir-' + index" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                                    <input type="date" :name="'pihak['+index+'][tanggal_lahir]'" :id="'pihak-tanggal-lahir-' + index" x-model="p.tanggal_lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                                </div>
                                                {{-- [PERUBAHAN] Input Agama (Dropdown) --}}
                                                <div>
                                                    <label :for="'pihak-agama-' + index" class="block text-sm font-medium text-gray-700">Agama</label>
                                                    <select :name="'pihak['+index+'][agama]'" :id="'pihak-agama-' + index" x-model="p.agama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Buddha">Buddha</option>
                                                        <option value="Khonghucu">Khonghucu</option>
                                                    </select>
                                                </div>
                                                <div class="md:col-span-2">
                                                    <label :for="'pihak-alamat-' + index" class="block text-sm font-medium text-gray-700">Alamat</label>
                                                    <textarea :name="'pihak['+index+'][alamat]'" :id="'pihak-alamat-' + index" x-model="p.alamat" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                                <button type="button" @click="addPihak" :disabled="pihak.length >= maxPihak" class="mt-4 text-sm text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:cursor-not-allowed">
                                    + Tambah Pihak
                                </button>
                            </div>

                            <hr>
                            
                            {{-- Bagian Saksi --}}
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Saksi-Saksi (Opsional)</h3>
                                <div class="space-y-4">
                                    <template x-for="(s, index) in saksi" :key="'saksi-'+index">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex-grow">
                                                <label :for="'saksi-nama-' + index" class="sr-only">Nama Lengkap Saksi</label>
                                                <input type="text" :name="'saksi['+index+'][nama]'" :id="'saksi-nama-' + index" x-model="s.nama" class="block w-full rounded-md border-gray-300 shadow-sm" :placeholder="'Nama Saksi ke-' + (index + 1)">
                                            </div>
                                            <button type="button" @click="removeSaksi(index)" class="text-red-500 hover:text-red-700 text-sm pt-2">Hapus</button>
                                        </div>
                                    </template>
                                </div>
                                <button type="button" @click="addSaksi" class="mt-4 text-sm text-blue-600 hover:text-blue-800">
                                    + Tambah Saksi
                                </button>
                            </div>

                            <hr>

                            {{-- Isi Pernyataan Dinamis --}}
                             <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Isi Pernyataan Bersama</h3>
                                <div class="space-y-4">
                                    <template x-for="(poin, index) in isi" :key="'poin-'+index">
                                        <div class="flex items-start space-x-3">
                                            <span class="pt-2 font-semibold text-gray-600" x-text="(index + 1) + '.'"></span>
                                            <div class="flex-grow">
                                                <textarea :name="'isi_pernyataan['+index+']'" x-model="isi[index]" rows="2" class="block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
                                            </div>
                                            <button type="button" @click="removePoin(index)" x-show="index > 0" class="pt-2 text-red-500 hover:text-red-700 text-sm">Hapus</button>
                                        </div>
                                    </template>
                                </div>
                                <button type="button" @click="addPoin" class="mt-4 text-sm text-blue-600 hover:text-blue-800">
                                    + Tambah Poin Pernyataan
                                </button>
                            </div>

                            {{-- [PERUBAHAN] Input Tempat Dibuat & Pejabat --}}
                            <hr>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="tempat_dibuat" class="block text-sm font-medium text-gray-700">Tempat Surat Dibuat</label>
                                    <input type="text" id="tempat_dibuat" name="tempat_dibuat" value="{{ old('tempat_dibuat', 'Gorontalo') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                </div>
                                <div>
                                    <label for="pejabat_mengetahui" class="block text-sm font-medium text-gray-700">Pejabat yang Mengetahui</label>
                                    <input type="text" id="pejabat_mengetahui" name="pejabat_mengetahui" value="{{ old('pejabat_mengetahui', 'DONI FERI SETIAWAN SH') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end space-x-4">
                            <button type="button" onclick="previewSurat()" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                                Preview Surat
                            </button>
                            <button type="submit" onclick="submitUntukSimpan()" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
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