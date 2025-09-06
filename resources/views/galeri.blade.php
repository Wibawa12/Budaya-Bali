<<<<<<< HEAD
@extends('layouts.main')

@section('content')
    <div x-data="{
        showModal: false, 
        modalImage: '', 
        closeModal() {
            this.showModal = false;
            this.modalImage = ''; // kosongkan untuk reset video
        }
    }" class="konten mt-20 mb-5 max-w-8xl md:mx-10 mx-3" data-aos="fade-up" data-aos-duration="900">
        <h2 class="text-2xl font-bold mb-4">Galeri Budaya Bali</h2>

        {{-- Galeri Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            {{-- Galeri 1 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                 @click="modalImage = '{{ asset('images/pura-ulun-danu.jpg') }}'; isVideo = false; showModal = true">
                <img src="{{ asset('images/pura-ulun-danu.jpg') }}" alt="Pura" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Pura Ulun Danu</h3>
                    <p class="text-sm text-gray-600">Pura yang indah di tepi Danau Beratan, Bedugul.</p>
                </div>
            </div>

            {{-- Galeri 2 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                 @click="modalImage = '{{ asset('video/tari-legong.mp4') }}'; isVideo = true; showModal = true">
                <img src="{{ asset('images/tari-legong.jpg') }}" alt="Tari Bali" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Tari Legong</h3>
                    <p class="text-sm text-gray-600">Tari klasik Bali yang dibawakan oleh penari muda.</p>
                </div>
            </div>

            {{-- Galeri 3 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                @click="modalImage = '{{ asset('images/seni-lukis1.jpg') }}'; isVideo = false; showModal = true">
                <img src="{{ asset('images/seni-lukis1.jpg') }}" alt="Seni Lukis Bali" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Seni Lukis Bali</h3>
                    <p class="text-sm text-gray-600">Seni lukis Bali dikenal dengan gaya tradisional wayang dan ekspresi kehidupan spiritual serta alam.</p>
                </div>
            </div>

            {{-- Galeri 4 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                @click="modalImage = '{{ asset('images/seni-ukir1.jpg') }}'; isVideo = false; showModal = true">
                <img src="{{ asset('images/seni-ukir1.jpg') }}" alt="Seni Ukir Bali" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Seni Ukir Bali</h3>
                    <p class="text-sm text-gray-600">Seni ukir kayu Bali digunakan untuk menghias pura, rumah, dan alat-alat upacara keagamaan.</p>
                </div>
            </div>

            {{-- Galeri 5 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                @click="modalImage = '{{ asset('video/gamelan.mp4') }}'; isVideo = true; showModal = true">
                <img src="{{ asset('images/gamelan.jpeg') }}" alt="Gamelan Bali" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Gamelan Bali</h3>
                    <p class="text-sm text-gray-600">Gamelan adalah alat musik tradisional Bali yang dimainkan dalam upacara adat dan pertunjukan seni.</p>
                </div>
            </div>

            {{-- Galeri 6 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                @click="modalImage = '{{ asset('images/rumah-adat.jpg') }}'; isVideo = false; showModal = true">
                <img src="{{ asset('images/rumah-adat.jpg') }}" alt="Rumah Adat Bali" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Rumah Adat Bali</h3>
                    <p class="text-sm text-gray-600">Rumah adat Bali dirancang sesuai filosofi Asta Kosala Kosali yang mengatur ruang berdasarkan harmoni alam.</p>
                </div>
            </div>

            {{-- Galeri 7 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                @click="modalImage = '{{ asset('images/pakaian-adat.jpeg') }}'; isVideo = false; showModal = true">
                <img src="{{ asset('images/pakaian-adat.jpeg') }}" alt="Pakaian Adat Bali" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Pakaian Adat Bali</h3>
                    <p class="text-sm text-gray-600">Pakaian adat Bali dikenakan saat upacara adat, terdiri dari kebaya, kamen, udeng, dan saput.</p>
                </div>
            </div>

            {{-- Galeri 8 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                @click="modalImage = '{{ asset('images/tri-hita-karana.jpg') }}'; isVideo = false; showModal = true">
                <img src="{{ asset('images/tri-hita-karana.jpg') }}" alt="Tri Hita Karana" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Tri Hita Karana</h3>
                    <p class="text-sm text-gray-600">Filosofi hidup masyarakat Bali yang menekankan keseimbangan hubungan antara manusia, alam, dan Tuhan.</p>
                </div>
            </div>
            
            {{-- Galeri 9 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                @click="modalImage = '{{ asset('images/ogoh-ogoh.jpeg') }}'; isVideo = false; showModal = true">
                <img src="{{ asset('images/ogoh-ogoh.jpeg') }}" alt="Ogoh-Ogoh" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Ogoh-Ogoh</h3>
                    <p class="text-sm text-gray-600">Ogoh-ogoh adalah seni patung khas Bali yang dibuat menyerupai Bhuta Kala, digambarkan sebagai makhluk menyeramkan, dan diarak keliling desa pada malam sebelum Hari Raya Nyepi.</p>
                </div>
            </div>
            
            {{-- Galeri 10 --}}
            <div class="bg-white rounded shadow-lg overflow-hidden cursor-pointer" 
                @click="modalImage = '{{ asset('images/barong.jpeg') }}'; isVideo = false; showModal = true">
                <img src="{{ asset('images/barong.jpeg') }}" alt="Barong" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold">Barong</h3>
                    <p class="text-sm text-gray-600">Barong adalah karakter penting dalam mitologi dan seni pertunjukan Bali. Ia adalah sosok berwujud singa yang melambangkan kebaikan dan kekuatan pelindung, serta menjadi simbol perlawanan terhadap kejahatan.</p>
                </div>
            </div>

        </div>

        {{-- Modal Preview --}}
        <div 
            x-show="showModal" 
            x-transition 
            x-cloak
            class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50"
        >
            {{-- Klik area luar untuk close --}}
            <div class="absolute inset-0" @click="closeModal()"></div>

            {{-- Konten Modal --}}
            <template x-if="modalImage.endsWith('.mp4')">
                <video 
                    class="relative z-10 max-w-full max-h-full rounded-lg shadow-lg" 
                    :src="modalImage" 
                    autoplay controls
                ></video>
            </template>

            <template x-if="!modalImage.endsWith('.mp4')">
                <img 
                    :src="modalImage" 
                    alt="Preview" 
                    class="relative z-10 max-w-full max-h-full rounded-lg shadow-lg"
                >
            </template>
        </div>


    </div>
@endsection