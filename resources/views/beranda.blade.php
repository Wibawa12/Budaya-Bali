@extends('layouts.main')

@section('content')
    <!-- Banner -->
    <section class="relative w-full min-h-screen bg-cover bg-center" id="beranda" style="background-image: url('{{ asset('images/banner-bali.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center px-4">
            <div class="text-center max-w-3xl">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 text-white leading-tight">
                    Selamat Datang di Website<br class="hidden sm:block"> Budaya Bali
                </h2>
                <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-200">
                    Portal informasi budaya Bali yang kaya dan mempesona.
                </p>
            </div>
        </div>
    </section>

    <!-- Isi Konten -->
    <section class="konten mt-8 mb-5 md:mx-10 mx-3" data-aos="fade-up" data-aos-duration="900">
        <div class="text-left text-justify m-2 mb-4 scroll-mt-20" id="tentang-kami">
            <h1 class="sm:text-3xl font-bold">Tentang Kami</h1>
            <p class="sm:text-lg">Website Budaya Bali adalah portal informasi yang dibuat untuk memperkenalkan dan melestarikan kekayaan budaya Bali kepada masyarakat luas, baik di dalam maupun luar negeri. Kami menyadari bahwa budaya Bali merupakan salah satu warisan bangsa yang penuh dengan nilai spiritual, seni, dan tradisi yang mendalam. Melalui platform ini, kami menghadirkan berbagai informasi mengenai upacara adat, tarian, musik tradisional, pakaian khas, serta tempat-tempat budaya yang menjadi identitas Pulau Dewata. <br>
            Dengan semangat pelestarian dan edukasi, kami berkomitmen untuk menyajikan konten yang akurat, menarik, dan mudah diakses oleh semua kalangan, khususnya generasi muda. Harapan kami, website ini dapat menjadi jembatan untuk mengenal lebih dekat dan mencintai budaya Bali, serta turut berperan dalam menjaga keberlanjutannya di tengah perkembangan zaman.</p>
        </div>

        <h1 class="text-2xl md:text-3xl font-bold mb-2 mx-2">Sejarah Singkat Bali</h1>
        <div class="text-left text-justify m-2 mb-7 flex flex-col md:flex-row gap-4">
            <img src="{{ asset('images/pura-besakih.jpg') }}" alt="pura besakih" class="w-full h-auto  md:w-1/3 rounded-lg my-4 shadow-lg shadow-pink-300/40" data-aos="zoom-in-up">            
            <div class="text-left text-justify md:w-2/3" data-aos="fade-up" data-aos-duration="900">
                <p class="text-base md:text-lg">Pulau Bali memiliki sejarah panjang yang kaya akan budaya, tradisi, dan pengaruh spiritual. Bukti-bukti arkeologis menunjukkan bahwa peradaban telah berkembang di Bali sejak sekitar 2000 SM, ketika masyarakat Austronesia mulai menetap di wilayah ini. Pada abad ke-8 dan ke-9 Masehi, pengaruh budaya India mulai masuk ke Bali melalui perdagangan dan penyebaran agama Hindu dan Buddha. Hal ini terlihat dari peninggalan prasasti dan candi kuno, seperti Candi Gunung Kawi dan Goa Gajah. Masa kejayaan Bali terjadi pada masa Kerajaan Bali Kuno, yang kemudian dipengaruhi oleh Kerajaan Majapahit dari Jawa Timur pada abad ke-14. Kedatangan Majapahit membawa struktur pemerintahan, sistem kasta, seni ukir, tari, serta ritual keagamaan Hindu yang terus dipertahankan hingga saat ini. <br>
                Setelah keruntuhan Majapahit, Bali tetap mempertahankan tradisi Hindu-nya, berbeda dengan sebagian besar wilayah Indonesia yang mulai menganut agama Islam. Hal inilah yang membuat Bali tetap unik secara budaya dan spiritual. Pada abad ke-19, Bali menghadapi kolonialisme Belanda yang akhirnya berhasil menguasai pulau ini pada awal abad ke-20. Meskipun mengalami tekanan kolonial, budaya Bali tetap bertahan dan bahkan semakin dikenal dunia setelah kemerdekaan Indonesia. Hari ini, Bali dikenal sebagai destinasi wisata budaya dan spiritual dunia yang tetap menjaga nilai-nilai tradisionalnya meski terus berkembang secara modern.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 scroll-mt-20" id="menu" data-aos="zoom-in-up">
            <!-- Kartu Artikel -->
            <div class="bg-whit rounded-lg shadow-lg shadow-rose-300/50 m-4 p-6">
                <h3 class="text-xl font-bold mb-2">Artikel Budaya</h3>
                <p class="text-gray-600">Pelajari tarian, upacara, dan adat istiadat Bali.</p>
                <a href="/artikel" class="text-red-600 font-semibold hover:underline mt-2 inline-block">Lihat Artikel</a>
            </div>

            <!-- Kartu Galeri -->
            <div class="bg-whit rounded-lg shadow-lg shadow-rose-300/50 m-4 p-6">
                <h3 class="text-xl font-bold mb-2">Galeri Budaya</h3>
                <p class="text-gray-600">Lihat foto-foto kegiatan budaya Bali yang indah.</p>
                <a href="/galeri" class="text-red-600 font-semibold hover:underline mt-2 inline-block">Lihat Galeri</a>
            </div>

            <!-- Kartu Tempat -->
            <div class="bg-whit rounded-lg shadow-lg shadow-rose-300/50 m-4 p-6">
                <h3 class="text-xl font-bold mb-2">Tempat Budaya</h3>
                <p class="text-gray-600">Kenali pura dan situs budaya penting di Bali.</p>
                <a href="/tempat" class="text-red-600 font-semibold hover:underline mt-2 inline-block">Lihat Tempat</a>
            </div>
        </div>
    </section>

    <!-- Form Hubungi kami -->
    <section class="bg-gray-100 scroll-mt-20" id="hubungi-kami">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12" data-aos="zoom-in-up" data-aos-duration="900">
            <h2 class="text-3xl font-bold text-center text-red-700 mb-6">Hubungi Kami</h2>

            @if(session('success'))
            <div class="bg-green-200 text-green-800 p-4 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
            @endif

            <form method="POST" action="{{ route('hubungi.kirim') }}" class="bg-white shadow p-6 rounded">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="nama" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Pesan</label>
                <textarea name="pesan" rows="5" class="w-full border px-3 py-2 rounded" required></textarea>
            </div>
            <button type="submit" class="bg-red-700 hover:bg-red-800 text-white px-6 py-2 rounded">
                Kirim
            </button>
            </form>
        </div>
    </section>
@endsection
