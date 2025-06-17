<!DOCTYPE html>
<html lang="id" x-data="{ menuOpen: false }" class="bg-gradient-to-br from-gray-50 to-blue-50 text-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sistem Pengaduan Masyarakat Polda">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaduan Polda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Glassmorphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Parallax effect for hero */
        .parallax {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen font-sans antialiased">
    <!-- Header -->
    <header class="sticky top-0 z-50 glass">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-6">
            <a href="#" class="text-3xl font-bold text-blue-700 tracking-tight">
                PoldaCare
            </a>
            <nav class="hidden lg:flex space-x-8 items-center">
                <a href="#tentang" class="text-gray-700 font-medium hover:text-blue-600 transition relative group">
                    Tentang
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                </a>
                <a href="#fitur" class="text-gray-700 font-medium hover:text-blue-600 transition relative group">
                    Fitur
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                </a>
                <a href="#kontak" class="text-gray-700 font-medium hover:text-blue-600 transition relative group">
                    Kontak
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                </a>
                <a href="{{ route('login') }}"
                    class="px-6 py-2.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 hover:shadow-blue-600/50 transition transform hover:scale-105">
                    Masuk
                </a>
            </nav>
            <button @click="menuOpen = !menuOpen" class="lg:hidden text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div x-show="menuOpen" @click.away="menuOpen = false" class="lg:hidden glass p-6 space-y-4">
            <a href="#tentang" class="block text-gray-700 font-medium hover:text-blue-600 transition">Tentang</a>
            <a href="#fitur" class="block text-gray-700 font-medium hover:text-blue-600 transition">Fitur</a>
            <a href="#kontak" class="block text-gray-700 font-medium hover:text-blue-600 transition">Kontak</a>
            <a href="{{ route('login') }}"
                class="block px-6 py-2.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 transition transform hover:scale-105 text-center">Masuk</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section
        class="flex-1 flex flex-col items-center justify-center text-center p-10 relative min-h-[80vh] 
               bg-gradient-to-br from-blue-50 to-blue-100">
        <!-- dekorasi -->
        <div
            class="absolute bottom-10 left-1/2 transform -translate-x-1/2 w-32 h-2 bg-blue-500/60 rounded-full blur-md">
        </div>

        <div class="glass p-10 rounded-2xl max-w-3xl animate-fadeInDown relative z-10 transform transition-all">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 text-blue-900 leading-tight drop-shadow-lg">
                Pengaduan Masyarakat
            </h1>
            <p class="max-w-xl mx-auto mb-8 text-blue-800 text-lg">
                Sampaikan laporan Anda dengan mudah, aman, dan transparan. <br>PoldaCare siap melayani dan menjaga
                keamanan masyarakat.
            </p>
            <a href="{{ route('login') }}"
                class="px-8 py-3.5 font-semibold text-gray-100 bg-blue-600 rounded-full shadow-lg transition transform hover:bg-blue-500 hover:shadow-blue-500/50 hover:scale-105">
                Laporkan Sekarang
            </a>
        </div>
    </section>
    <section id="laporkan" class="p-10 max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-6 text-blue-700 animate-fadeInUp">
            Laporkan Pengaduan Anda
        </h2>
    
        @if (session('success'))
            <div class="p-4 mb-4 text-green-800 bg-green-200 rounded">
                {{ session('success') }}
            </div>
        @endif
    
        <form action="{{ route('pengaduans.store') }}" method="POST" class="glass p-6 rounded-2xl space-y-4">
            @csrf
            <div>
                <label for="title" class="block font-semibold mb-2">Judul Pengaduan</label>
                <input id="title" name="title" type="text" required
                       class="w-full p-3 border rounded-md">
            </div>
    
            <div>
                <label for="location" class="block font-semibold mb-2">Lokasi Kejadian</label>
                <input id="location" name="location" type="text" required
                       class="w-full p-3 border rounded-md">
            </div>
    
            <div>
                <label for="description" class="block font-semibold mb-2">Deskripsi</label>
                <textarea id="description" name="description" rows="5" required
                          class="w-full p-3 border rounded-md"></textarea>
            </div>
    
            <button type="submit"
                    class="px-6 py-2.5 font-semibold text-gray-100 bg-blue-600 rounded-full shadow-lg transition transform hover:bg-blue-500 hover:shadow-blue-500/50 hover:scale-105">
                Kirim Pengaduan
            </button>
        </form>
    </section>
    



    <!-- Tentang Section -->
    <section id="tentang" class="p-10 max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-blue-700 animate-fadeInUp">
            Tentang PoldaCare
        </h2>
        <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed animate-fadeInUp animation-delay-200">
            PoldaCare adalah platform resmi Polda untuk menerima laporan masyarakat secara online, dirancang untuk
            memberikan pelayanan yang cepat, transparan, dan terpercaya dengan teknologi modern.
        </p>
    </section>

    <!-- Fitur Section -->
    <section id="fitur" class="p-10 max-w-7xl mx-auto grid md:grid-cols-3 gap-8">
        <div
            class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl hover:bg-blue-100/60 backdrop-blur-md">
            <h4 class="font-bold text-blue-700 mb-3 text-2xl transition transform hover:translate-y-[-2px]">
                Aduan Mudah
            </h4>
            <p class="text-gray-600 leading-relaxed">
                Laporkan masalah secara langsung melalui platform kami tanpa perlu mengunjungi kantor.
            </p>
        </div>
        <div
            class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl hover:bg-blue-100/60 backdrop-blur-md">
            <h4 class="font-bold text-blue-700 mb-3 text-2xl transition transform hover:translate-y-[-2px]">
                Transparan
            </h4>
            <p class="text-gray-600 leading-relaxed">
                Pantau perkembangan laporan Anda secara real-time dengan laporan yang jelas dan lengkap.
            </p>
        </div>
        <div
            class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl hover:bg-blue-100/60 backdrop-blur-md">
            <h4 class="font-bold text-blue-700 mb-3 text-2xl transition transform hover:translate-y-[-2px]">
                Aman
            </h4>
            <p class="text-gray-600 leading-relaxed">
                Identitas dan data pelapor dijamin kerahasiaannya dengan sistem keamanan terkini.
            </p>
        </div>
    </section>


    <!-- Kontak Section -->
    <section id="kontak" class="p-10 max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-blue-700 animate-fadeInUp">
            Kontak Kami
        </h2>
        <p class="text-gray-600 text-lg animate-fadeInUp animation-delay-200">
            Hubungi kami melalui email
            <a href="mailto:pengaduan@polda.go.id"
                class="font-semibold text-blue-600 hover:text-blue-800 transition underline">
                pengaduan@polda.go.id
            </a>
            atau kunjungi kantor Polda terdekat untuk bantuan langsung.
        </p>
    </section>

    <!-- Footer -->
    <footer class="p-6 text-center text-gray-600 bg-gray-100 glass">
        © {{ date('Y') }} PoldaCare. Semua hak dilindungi.
    </footer>
</body>

</html>
