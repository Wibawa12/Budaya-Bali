<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Bali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800">
    <!-- HEADER -->
    <header id="main-header" class="{{ (request()->is('artikel') || request()->is('galeri') || request()->is('tempat')) ? 'bg-red-600' : 'bg-transparent' }} fixed top-0 left-0 w-full z-50 transition duration-300 ease-in-out text-shadow">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="text-2xl font-bold text-white" id="logo-text">
                    <a href="/">Budaya Bali</a>
                </div>

                <!-- HAMBURGER (MOBILE) -->
                <div class="sm:hidden">
                    <button id="hamburger-button" class="text-white focus:outline-none">
                        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- MENU DESKTOP -->
                <nav id="nav-links" class="hidden sm:flex space-x-4 ml-auto text-white">
                    <a href="/" class="hover:underline">Beranda</a>
                    <a href="/artikel" class="hover:underline">Artikel</a>
                    <a href="/galeri" class="hover:underline">Galeri</a>
                    <a href="/tempat" class="hover:underline">Tempat Budaya</a>
                </nav>
            </div>

            <!-- MENU MOBILE -->
            <div id="mobile-menu" class="sm:hidden hidden flex flex-col space-y-2 pb-4 text-right text-white">
                <a href="/" class="hover:underline hover:bg-red-500">Beranda</a>
                <a href="/artikel" class="hover:underline hover:bg-red-500">Artikel</a>
                <a href="/galeri" class="hover:underline hover:bg-red-500">Galeri</a>
                <a href="/tempat" class="hover:underline hover:bg-red-500">Tempat Budaya</a>
            </div>
        </div>
    </header>

    <!-- KONTEN UTAMA -->
    <main class="container w-full min-h-screen flex flex-col">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-200 text-center py-4 mt-10 text-sm">
        Copyright &copy; 2025 - Ida Bagus Putu Wibawa Pemaron, All Rights Reserved.
    </footer>

    <!-- Floating Audio Button -->
    <div 
        x-data="{ playing: false, audio: null }" 
        class="fixed bottom-6 right-6 z-50"
        x-init="
            audio = new Audio('{{ asset('audio/rindik-bali.mp3') }}');
            audio.loop = true;

            // Coba auto play, jika gagal tetap diam
            audio.play()
                .then(() => playing = true)
                .catch(() => playing = false);

            $watch('playing', value => {
                if (value) {
                    audio.play();
                } else {
                    audio.pause();
                }
            });
        "
    >
        <button 
            @click="playing = !playing" 
            class="w-12 h-12 rounded-full bg-red-600 text-white flex items-center justify-center shadow-lg hover:bg-red-700 transition duration-300"
            :title="playing ? 'Pause' : 'Play'"
        >
            <!-- Play Icon (initially visible) -->
            <template x-if="!playing">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M5 3v18l15-9L5 3z" />
                </svg>
            </template>

            <!-- Pause Icon (shows after playing) -->
            <template x-if="playing">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6" />
                </svg>
            </template>
        </button>
    </div>

    <!-- Script Js -->
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
