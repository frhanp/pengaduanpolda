<!DOCTYPE html>
<html lang="id" x-data="{ menuOpen: false }" class="bg-gradient-to-br from-gray-50 to-blue-50 text-gray-900 scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sistem Pengaduan Masyarakat Polda">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PoldaCare - Pengaduan Masyarakat</title>

    <!-- Tailwind CSS & AlpineJS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Leaflet CSS & JS for Maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Leaflet MarkerCluster CSS & JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.Default.css" />
    <script src="https://unpkg.com/leaflet.markercluster@1.5.1/dist/leaflet.markercluster.js"></script>

    <!-- Custom Styles -->
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        #map {
            height: 400px;
            z-index: 10;
        }

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

        #legend {
            padding: 10px;
            line-height: 18px;
            color: #555;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        #legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
            border-radius: 50%;
        }
    </style>
    @stack('styles')
</head>

<body class="flex flex-col min-h-screen font-sans antialiased">
    <!-- Header -->
    <header class="sticky top-0 z-50 glass">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-6">
            <a href="/" class="text-3xl font-bold text-blue-700 tracking-tight">Polresta Gorontalo Kota</a>
            <nav class="hidden lg:flex space-x-8 items-center">
                <a href="{{ route('lacak.aduan') }}"
               class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Lacak Aduan<span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                <a href="{{ route('peta.rawan') }}"
                    class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Peta Kerawanan<span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                <a href="{{ route('landing') }}#lapor"
                    class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Lapor<span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                
                        <a href="{{ route('page.profil') }}" class="text-gray-700 font-medium hover:text-blue-600">Profil</a>
                        <a href="{{ route('page.fitur') }}" class="text-gray-700 font-medium hover:text-blue-600">Fitur</a>
                        <a href="{{ route('page.kontak') }}" class="text-gray-700 font-medium hover:text-blue-600">Kontak</a>

                <a href="{{ route('login') }}"
                    class="px-6 py-2.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 hover:shadow-blue-600/50 transition transform hover:scale-105">Masuk
                    Petugas</a>
            </nav>
            <button @click="menuOpen = !menuOpen" class="lg:hidden text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div x-show="menuOpen" @click.away="menuOpen = false" class="lg:hidden glass p-6 space-y-4">
            <a href="#lapor" class="block text-gray-700 font-medium hover:text-blue-600 transition">Lapor</a>
            <a href="#tentang" class="block text-gray-700 font-medium hover:text-blue-600 transition">Tentang</a>
            <a href="#fitur" class="block text-gray-700 font-medium hover:text-blue-600 transition">Fitur</a>
            <a href="#kontak" class="block text-gray-700 font-medium hover:text-blue-600 transition">Kontak</a>
            <a href="{{ route('login') }}"
                class="block px-6 py-2.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 transition transform hover:scale-105 text-center">Masuk
                Petugas</a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="p-6 text-center text-gray-600 bg-gray-100 glass">
        © {{ date('Y') }} Polresta Gorontalo Kota. Semua hak dilindungi.
    </footer>

    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 3000, // Notifikasi akan hilang setelah 3 detik
                showConfirmButton: false
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

</body>

</html>
