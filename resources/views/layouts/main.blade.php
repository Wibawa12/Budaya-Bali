<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Bali</title>
    <!-- TAILWIND CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- AOS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ALPINE JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800">
    <!-- HEADER -->
    <header id="main-header" class="{{ (request()->is('artikel') || request()->is('galeri') || request()->is('tempat')) ? 'bg-red-600' : 'bg-transparent' }} fixed top-0 left-0 w-full z-50 transition duration-300 ease-in-out text-shadow">
        <div class="max-w-8xl md:mx-4 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- LOGO -->
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
                    <a href="/" class="hover:underline {{ request()->is('/') ? 'underline font-bold' : '' }}">Beranda</a>
                    <a href="/artikel" class="hover:underline {{ request()->is('artikel') ? 'underline font-bold' : '' }}">Artikel</a>
                    <a href="/galeri" class="hover:underline {{ request()->is('galeri') ? 'underline font-bold' : '' }}">Galeri</a>
                    <a href="/tempat" class="hover:underline {{ request()->is('tempat') ? 'underline font-bold' : '' }}">Tempat Budaya</a>
                </nav>
            </div>

            <!-- MENU MOBILE -->
            <div id="mobile-menu" class="sm:hidden hidden flex flex-col space-y-2 pb-4 text-right text-white">
                <a href="/" class="hover:underline {{ request()->is('/') ? 'underline font-bold' : '' }}">Beranda</a>
                <a href="/artikel" class="hover:underline hover:bg-rose-400 {{ request()->is('artikel') ? 'underline font-bold' : '' }}">Artikel</a>
                <a href="/galeri" class="hover:underline hover:bg-rose-400 {{ request()->is('galeri') ? 'underline font-bold' : '' }}">Galeri</a>
                <a href="/tempat" class="hover:underline hover:bg-rose-400 {{ request()->is('tempat') ? 'underline font-bold' : '' }}">Tempat Budaya</a>
            </div>
        </div>
    </header>

    <!-- KONTEN UTAMA -->
    <main class="w-full min-h-screen flex flex-col">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-neutral-800 bg-opacity-20 text-black font-bold mt-10 py-8">
        <div class="max-w-4xl mx-auto flex flex-col items-center space-y-4">
            <!-- SOCIAL MEDIA -->
            <div class="flex space-x-6 text-2xl">
                <a href="https://www.instagram.com/guswii._?igsh=MXZhaDJwcjdiNXl2Ng==" aria-label="Instagram" class="hover:text-white transition">
                    <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5A4.25 4.25 0 0 0 20.5 16.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zm4.25 3.25a5.25 5.25 0 1 1 0 10.5 5.25 5.25 0 0 1 0-10.5zm0 1.5a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5zm5.25.75a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                </a>
                <a href="https://github.com/Wibawa12/Budaya-Bali" target="_blank" aria-label="GitHub" class="hover:text-white transition">
                    <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.207 11.387.6.113.793-.262.793-.583 0-.288-.012-1.243-.017-2.252-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.205.085 1.84 1.237 1.84 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.606-2.665-.304-5.466-1.332-5.466-5.932 0-1.31.468-2.382 1.236-3.222-.124-.303-.535-1.523.117-3.176 0 0 1.008-.323 3.3 1.23a11.5 11.5 0 0 1 3.003-.404c1.02.005 2.047.138 3.003.404 2.29-1.553 3.297-1.23 3.297-1.23.653 1.653.242 2.873.119 3.176.77.84 1.235 1.912 1.235 3.222 0 4.61-2.804 5.625-5.475 5.922.43.37.823 1.102.823 2.222 0 1.606-.015 2.898-.015 3.293 0 .324.192.699.8.58C20.565 21.796 24 17.297 24 12c0-6.63-5.37-12-12-12z"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/share/16wVhknBTp/" aria-label="Facebook" class="hover:text-white transition">
                    <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0"/>
                    </svg>
                </a>
            </div>

            <!-- LINK DESKTOP -->
            <div class="hidden sm:flex space-x-6 text-center text-base font-medium">
                <a href="/#beranda" class="hover:underline">Beranda</a>
                <a href="/#tentang-kami" class="hover:underline">Tentang Kami</a>
                <a href="/#menu" class="hover:underline">Menu</a>
                <a href="/#hubungi-kami" class="hover:underline">Kontak</a>
            </div>

            <!-- LINK MOBILE -->
            <div class="grid grid-cols-2 gap-2 space-x-2 sm:hidden text-center text-base font-medium">
                <a href="/#beranda" class="hover:underline">Beranda</a>
                <a href="/#tentang-kami" class="hover:underline">Tentang Kami</a>
                <a href="/#menu" class="hover:underline">Menu</a>
                <a href="/#hubungi-kami" class="hover:underline">Kontak</a>
            </div>

            <!-- Copyright -->
            <div class="text-center text-sm">
                Created by <span class="font-bold">Gus Wi.</span> | &copy; 2025.
            </div>
        </div>
    </footer>

    <!-- FLOATING AUDIO BUTTON -->
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
