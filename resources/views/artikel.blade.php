@extends('layouts.main')

@section('content')
    <div class="konten mt-20 mb-5 max-w-8xl md:mx-10 mx-3" data-aos="fade-up" data-aos-duration="900">
        <h2 class="text-2xl font-bold mb-4">Artikel Budaya Bali</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Artikel 1 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Tari Kecak: Tarian Api Sakral Bali</h3>
                <p class="text-gray-600 mt-2">Tari Kecak adalah tarian khas Bali yang melibatkan puluhan penari pria dengan irama “cak cak cak”.</p>
                <a href="https://www.gramedia.com/literasi/sejarah-asal-tari-kecak/" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                    Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 2 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Upacara Ngaben</h3>
                <p class="text-gray-600 mt-2">Upacara pembakaran jenazah sebagai bentuk penghormatan terakhir dalam tradisi Hindu Bali.</p>
                <a href="http://gramedia.com/literasi/upacara-ngaben/?srsltid=AfmBOopvE0vn1Er0iQdpX74BlEzK5n2tpC6nQaJSYnoE3GA7RGY9a8cv" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                    Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 3 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Melukat: Tradisi Pembersihan Diri</h3>
                <p class="text-gray-600 mt-2">Melukat adalah ritual spiritual masyarakat Bali untuk membersihkan diri dari energi negatif secara lahir dan batin.</p>
                <a href="https://www.antaranews.com/berita/4074618/mengenal-melukat-ritual-pembersihan-diri-dan-memuliakan-air-di-bali" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                    Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 4 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Galungan dan Kuningan</h3>
                <p class="text-gray-600 mt-2">Perayaan Galungan dan Kuningan merupakan simbol kemenangan Dharma (kebaikan) melawan Adharma (kejahatan).</p>
                <a href="https://www.detik.com/bali/budaya/d-7198224/hari-raya-galungan-dan-kuningan-makna-hingga-tradisi-pelaksanaanya-di-bali" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                    Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 5 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Subak: Sistem Irigasi Tradisional Bali</h3>
                <p class="text-gray-600 mt-2">Subak adalah sistem pengairan sawah tradisional Bali yang diakui UNESCO sebagai warisan budaya dunia.</p>
                <a href="https://denpasar.kompas.com/read/2022/10/16/072000778/subak-sistem-irigasi-tradisional-di-bali-dari-asal-usul-hingga-manfaat?page=all" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                    Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 6 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Ogoh-Ogoh: Simbol Pengusiran Roh Jahat</h3>
                <p class="text-gray-600 mt-2">Ogoh-ogoh adalah boneka raksasa yang dibuat menjelang Hari Raya Nyepi untuk mengusir roh-roh jahat dan energi negatif.</p>
                <a href="https://www.detik.com/bali/budaya/d-7835084/akar-tradisi-proses-pembuatan-makna-hingga-tantangan-ogoh-ogoh-di-bali" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                    Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 7 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Hari Raya Nyepi: Hari Suci Umat Hindu Bali</h3>
                <p class="text-gray-600 mt-2">Hari Nyepi merupakan hari raya umat Hindu Bali untuk menyepi dan merenung, yang ditandai dengan tidak menyalakan api, bepergian, bekerja, dan bersenang-senang selama 24 jam.</p>
                <a href="https://narasi.tv/read/narasi-daily/hari-raya-nyepi-sejarah-makna-aturan-dan-cara-perayaannya" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 8 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Tradisi Mekotek di Munggu</h3>
                <p class="text-gray-600 mt-2">Mekotek adalah tradisi perang-perangan menggunakan tongkat kayu yang dilakukan di Desa Munggu sebagai bagian dari perayaan Kuningan untuk menangkal hal buruk dan memohon keselamatan.</p>
                <a href="https://regional.kompas.com/read/2022/02/11/202223478/tradisi-mekotek-bali-sejarah-tujuan-dan-tata-cara?page=all" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 9 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Tradisi Omed-omedan: Ciuman Massal Pemuda Denpasar</h3>
                <p class="text-gray-600 mt-2">Omed-omedan adalah tradisi unik pasca Nyepi di Desa Sesetan, Denpasar, di mana para pemuda dan pemudi saling tarik dan berciuman sebagai simbol perekat hubungan sosial.</p>
                <a href="https://regional.kompas.com/read/2022/09/13/152255078/omed-omedan-dari-bali-pengertian-asal-usul-dan-cara-pelaksanaan?page=all" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 10 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Perang Pandan: Tradisi Duel Lelaki di Bali Timur</h3>
                <p class="text-gray-600 mt-2">Perang Pandan atau "mekaré-kare" adalah tradisi sakral Desa Tenganan, di mana para pemuda bertarung menggunakan daun pandan berduri sebagai bagian dari ritual untuk menghormati Dewa Indra.</p>
                <a href="https://www.kompas.com/stori/read/2024/07/03/183000779/sejarah-perang-pandan-tari-perang-untuk-menghormati-dewa-indra" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 11 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Tari Barong: Simbol Pertarungan Baik dan Jahat</h3>
                <p class="text-gray-600 mt-2">Tari Barong adalah pertunjukan yang menggambarkan pertarungan antara Barong (simbol kebaikan) dan Rangda (simbol kejahatan) sebagai representasi filosofi keseimbangan hidup dalam budaya Bali.</p>
                <a href="https://www.detik.com/bali/budaya/d-6381637/tari-barong-bali-sejarah-jenis-dan-lokasi-pertunjukannya" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                Baca Selengkapnya
                </a>
            </div>

            {{-- Artikel 12 --}}
            <div class="bg-white rounded shadow-lg p-4">
                <h3 class="text-xl font-semibold">Tari Legong: Tari Klasik Penuh Keanggunan</h3>
                <p class="text-gray-600 mt-2">Tari Legong adalah tarian klasik Bali yang dibawakan oleh penari wanita muda dengan gerakan halus, ekspresif, dan penuh makna. Tarian ini dahulu hanya ditampilkan di lingkungan keraton atau pura.</p>
                <a href="https://www.gramedia.com/literasi/tari-legong/?srsltid=AfmBOor3okai0zmhMI2xZJdEoCPX7g37hySlUSNDjQv3tJnQdLfgAVaX" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="text-red-600 font-semibold mt-2 inline-block hover:underline">
                Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>
@endsection
