<x-guest-layout>
    {{-- Latar belakang dengan gradien halus --}}
    <div class="bg-gradient-to-b from-blue-50 to-white">
        <section class="py-20 md:py-28 px-4">
            <div class="max-w-5xl mx-auto">
                
                {{-- Judul Halaman --}}
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-slate-800 tracking-tight">
                        Hubungi Kami
                    </h2>
                    <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">
                        Temukan alamat Polres dan Polsek terdekat di wilayah Kota Gorontalo.
                    </p>
                </div>

                {{-- [PERUBAHAN UTAMA] Grid untuk menampilkan alamat Polsek --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    @php
                        // Menyiapkan data alamat dalam array agar mudah dikelola
                        $alamatPolsek = [
                            [
                                'nama' => 'Polres Gorontalo Kota',
                                'alamat' => 'Jl. Pangeran Kalengkongan, Tenda, Kec. Hulonthalangi, Kota Gorontalo, Gorontalo 96133'
                            ],
                            [
                                'nama' => 'Polsek Kota Utara',
                                'alamat' => 'Jl. Rusli Datau, Dulomo Sel., Kec. Kota Utara, Kota Gorontalo 96128'
                            ],
                            [
                                'nama' => 'Polsek Kota Tengah',
                                'alamat' => 'Jl. Madura, Liluwo, Kec. Kota Tengah, Pulubala, Kota Gorontalo, Gorontalo 96138'
                            ],
                            [
                                'nama' => 'Polsek Kota Timur',
                                'alamat' => 'Jl. Taman Sari, Moodu, Kec. Kota Timur, Kota Gorontalo, Gorontalo 96135'
                            ],
                            [
                                'nama' => 'Polsek Kota Selatan',
                                'alamat' => 'Jl. Gn Tilongkabila, Biawu, Kec. Kota Selatan, Kota Gorontalo, Gorontalo 96133'
                            ],
                            [
                                'nama' => 'Polsek Kota Barat',
                                'alamat' => 'Jl. Loji, Pilolodaa, Kec. Kota Barat, Kota Gorontalo, Gorontalo 96181'
                            ],
                            [
                                'nama' => 'Polsek Dungingi',
                                'alamat' => 'Jl. KH Agus Salim, Huangobotu, Kec. Dungingi, Kota Gorontalo, Gorontalo, 96136'
                            ],
                            [
                                'nama' => 'Polsek Kawasan Pelabuhan Gorontalo',
                                'alamat' => 'Jl. R. Atje Slamet, Leato Sel., Kec. Dumbo Raya, Kota Gorontalo, Gorontalo 96116'
                            ],
                        ];
                    @endphp

                    @foreach ($alamatPolsek as $polsek)
                        <div class="bg-white rounded-xl shadow-lg p-6 flex space-x-6 transition-all duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1">
                            {{-- Ikon --}}
                            <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-lg w-14 h-14 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                </svg>
                            </div>
                            {{-- Detail Alamat --}}
                            <div class="flex flex-col justify-between">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">{{ $polsek['nama'] }}</h3>
                                    <p class="mt-1 text-gray-600 leading-relaxed">{{ $polsek['alamat'] }}</p>
                                </div>
                                {{-- [PERBAIKAN] Link Google Maps sekarang mencari berdasarkan nama --}}
                                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($polsek['nama']) }}" target="_blank" class="mt-3 text-sm font-semibold text-blue-600 hover:text-blue-800 inline-flex items-center">
                                    Lihat di Peta
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-1"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" /></svg>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
    </div>
</x-guest-layout>