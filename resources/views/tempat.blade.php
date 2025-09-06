@extends('layouts.main')

@section('content')
    <div class="konten mt-20 mb-5 max-w-8xl md:mx-10 mx-3" data-aos="fade-up" data-aos-duration="900">
        <h2 class="text-2xl font-bold mb-4">Tempat Budaya di Bali</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- Tempat 1: Pura Besakih --}}
            <div class="bg-white rounded shadow-lg overflow-hidden">
                <img src="{{ asset('images/pura-besakih.jpg') }}" alt="Pura Besakih" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold text-lg">Pura Besakih</h3>
                    <p class="text-sm text-gray-600">Pura terbesar di Bali yang berada di kaki Gunung Agung, pusat spiritual umat Hindu Bali.</p>
                    <a href="https://maps.google.com/?q=Pura+Besakih+Bali" target="_blank" class="mt-2 inline-block bg-red-600 text-white text-sm px-4 py-1.5 rounded hover:bg-red-700 transition">Lihat Lokasi</a>
                </div>
            </div>

            {{-- Tempat 2: Desa Penglipuran --}}
            <div class="bg-white rounded shadow-lg overflow-hidden">
                <img src="{{ asset('images/desa-penglipuran.jpg') }}" alt="Desa Penglipuran" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold text-lg">Desa Penglipuran</h3>
                    <p class="text-sm text-gray-600">Desa adat yang terkenal karena kebersihan dan pelestarian budaya Bali yang kuat.</p>
                    <a href="https://maps.google.com/?q=Desa+Penglipuran+Bali" target="_blank" class="mt-2 inline-block bg-red-600 text-white text-sm px-4 py-1.5 rounded hover:bg-red-700 transition">Lihat Lokasi</a>
                </div>
            </div>

            {{-- Tempat 3: Pura Tanah Lot --}}
            <div class="bg-white rounded shadow-lg overflow-hidden">
                <img src="{{ asset('images/pura-tanah-lot.png') }}" alt="Pura Tanah Lot" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold text-lg">Pura Tanah Lot</h3>
                    <p class="text-sm text-gray-600">Pura laut yang ikonik terletak di atas batu karang di tepi laut Tabanan Bali.</p>
                    <a href="https://maps.google.com/?q=Tanah+Lot+Bali" target="_blank" class="mt-2 inline-block bg-red-600 text-white text-sm px-4 py-1.5 rounded hover:bg-red-700 transition">Lihat Lokasi</a>
                </div>
            </div>

            {{-- Tempat 4: Pura Luhur Uluwatu --}}
            <div class="bg-white rounded shadow-lg overflow-hidden">
                <img src="{{ asset('images/pura-luhur-uluwatu.png') }}" alt="Pura Luhur Uluwatu" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold text-lg">Pura Luhur Uluwatu</h3>
                    <p class="text-sm text-gray-600">Pura di ujung tebing yang indah, terkenal dengan pemandangan laut dan pertunjukan tari Kecak.</p>
                    <a href="https://maps.google.com/?q=Pura+Luhur+Uluwatu+Bali" target="_blank" class="mt-2 inline-block bg-red-600 text-white text-sm px-4 py-1.5 rounded hover:bg-red-700 transition">Lihat Lokasi</a>
                </div>
            </div>

            {{-- Tempat 5: Pura Tirta Empul --}}
            <div class="bg-white rounded shadow-lg overflow-hidden">
                <img src="{{ asset('images/pura-tirta-empul.png') }}" alt="Pura Tirta Empul" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold text-lg">Pura Tirta Empul</h3>
                    <p class="text-sm text-gray-600">Pura suci di Tampaksiring yang terkenal dengan kolam pemandian air suci untuk melukat.</p>
                    <a href="https://maps.google.com/?q=Tirta+Empul+Bali" target="_blank" class="mt-2 inline-block bg-red-600 text-white text-sm px-4 py-1.5 rounded hover:bg-red-700 transition">Lihat Lokasi</a>
                </div>
            </div>

            {{-- Tempat 6: Desa Terunyan --}}
            <div class="bg-white rounded shadow-lg overflow-hidden">
                <img src="{{ asset('images/desa-terunyan.png') }}" alt="Desa Terunyan" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold text-lg">Desa Terunyan</h3>
                    <p class="text-sm text-gray-600">Desa Bali Aga yang unik karena tradisi pemakaman tanpa mengubur jenazah, di pinggir Danau Batur.</p>
                    <a href="https://maps.google.com/?q=Desa+Terunyan+Bali" target="_blank" class="mt-2 inline-block bg-red-600 text-white text-sm px-4 py-1.5 rounded hover:bg-red-700 transition">Lihat Lokasi</a>
                </div>
            </div>

            {{-- Tempat 7: Desa Tenganan --}}
            <div class="bg-white rounded shadow-lg overflow-hidden">
                <img src="{{ asset('images/desa-tenganan.png') }}" alt="Desa Tenganan" class="w-full h-48 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold text-lg">Desa Tenganan</h3>
                    <p class="text-sm text-gray-600">Salah satu desa Bali Aga yang mempertahankan tradisi dan kain tenun khas Geringsing.</p>
                    <a href="https://maps.google.com/?q=Desa+Tenganan+Bali" target="_blank" class="mt-2 inline-block bg-red-600 text-white text-sm px-4 py-1.5 rounded hover:bg-red-700 transition">Lihat Lokasi</a>
                </div>
            </div>

        </div>
    </div>
@endsection
