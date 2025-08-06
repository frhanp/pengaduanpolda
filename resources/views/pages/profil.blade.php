<x-guest-layout>
    {{-- Latar belakang bersih untuk kesan minimalis --}}
    <div class.="bg-white">
        <section class="py-20 md:py-28 px-4">
            <div class="max-w-4xl mx-auto">
                
                {{-- Judul Halaman --}}
                {{-- Ganti div text-center Anda dengan blok ini --}}
<div class="text-center mb-20 flex items-center justify-center gap-4 md:gap-8">
    
    {{-- Logo Kiri --}}
    <div class="flex-shrink-0">
        {{-- Ganti dengan URL logo Anda jika berbeda --}}
        <img src="{{ asset('images/polreslogocowo.png') }}" alt="Logo Kiri" 
             class="h-16 w-16 md:h-24 md:w-24 object-cover rounded-full shadow-lg border-4 border-white/50">
    </div>

    {{-- Teks Judul --}}
    <div>
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 tracking-tight">
            Profil Polres Gorontalo Kota
        </h2>
        <p class="mt-4 text-lg text-gray-600">
            Visi dan Misi kami dalam melayani masyarakat.
        </p>
    </div>

    {{-- Logo Kanan --}}
    <div class="flex-shrink-0">
        {{-- Ganti dengan URL logo Anda jika berbeda --}}
        <img src="{{ asset('images/polreslogocewe.png') }}" alt="Logo Kanan" 
             class="h-16 w-16 md:h-24 md:w-24 object-cover rounded-full shadow-lg border-4 border-white/50">
    </div>

</div>

                <div class="space-y-16">
                    
                    <!-- Bagian Visi -->
                    <div>
                        <h3 class="text-3xl font-bold text-gray-800 border-b-2 border-blue-600 pb-4 mb-6">Visi</h3>
                        <blockquote class="text-2xl font-light text-gray-700 leading-relaxed">
                            “Terwujudnya Polres Gorontalo Kota yang professional, modern dan terpercaya.”
                        </blockquote>
                    </div>

                    <!-- Bagian Misi -->
                    <div>
                        <h3 class="text-3xl font-bold text-gray-800 border-b-2 border-blue-600 pb-4 mb-8">Misi</h3>
                        <ol class="space-y-6 text-lg text-gray-700">
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">1</span>
                                <span>Mewujudkan pelayanan Publik secara prima terhadap masyarakat serta didukung oleh sumber daya manusia dan prasarana pendukung.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">2</span>
                                <span>Melakukan penegakan hukum dengan tidak diskriminatif, menjunjung tinggi HAM, anti KKN dan anti kekerasan.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">3</span>
                                <span>Memberikan dukungan kepada masyarakat berupa bimbingan, penyuluhan dan pengembangan potensi masyarakat untuk ikut serta berperan aktif dalam memelihara keamanan dan ketertiban dilingkungan masyarakat dalam rangka meningkatkan kesadaran hukum.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">4</span>
                                <span>Meningkatkan peran Bhabinkamtibmas di setiap kelurahan dalam mengimplementasikan strategi Polmas.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">5</span>
                                <span>Menjaga keamanan, keselamatan, ketertiban dan kelancaran lalu lintas untuk menjamin keselamatan dan kelancaran arus orang dan barang.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">6</span>
                                <span>Menggalakkan seluruh anggota Polres Gorontalo Kota guna memberikan deteksi dini terhadap ancaman yang dapat menimbulkan kerawanan kamtibmas di wilayah Polres Gorontalo Kota.</span>
                            </li>
                        </ol>
                    </div>

                </div>

            </div>
        </section>
    </div>
</x-guest-layout>