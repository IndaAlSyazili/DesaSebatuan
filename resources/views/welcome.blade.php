<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profile Web')</title>
    <!-- Bootstrap CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</head>
<body>
   
<nav class="bg-[#399918] dark:bg-gray-900 dark:border-gray-700 fixed top-0 w-full z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse"
        class="flex items-center space-x-3 rtl:space-x-reverse bg-gray-900 p-2 rounded-lg hover:bg-green-700 transition-all">
            <img src="{{ asset('img/logo.png') }}" alt="Logo"
        class="h-14" alt="Flowbite Logo"/>
            <span class="self-center text-2x2 font-semibold whitespace-nowrap text-white">Desa Sebatuan</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-[#399918] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#399918] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
            <a href="/" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"  aria-current="page">Profile Desa</a>
            </li>        
            <li>
            <a href="Berita" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Berita</a>
            </li>
            <li>
            <a href="Statistik" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Statistik</a>
            </li>
            <li>
            <a href="potensi-desa" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Potensi Desa</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    

<div id="default-carousel" class="relative w-full mt-24" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/kkn.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/kkn.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/kkn.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/contoh.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/contoh.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<section id="struktur" class="py-12">
        <div  style="margin-top: 160px;" class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-700 mb-8">Struktur Pemerintahan Desa</h2>
            <div class="flex flex-col items-center">
                <!-- Kepala Desa -->
                <div class="bg-white shadow-lg rounded-lg p-6 w-full md:w-2/3 text-center mb-6">
                    <img src="https://via.placeholder.com/150" alt="Foto Kepala Desa" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-green-600">Kepala Desa</h3>
                    <p class="mt-2 text-gray-600">Nama: Pak Ahmad</p>
                    <p class="text-sm text-gray-500">Pemimpin desa dan pengambil kebijakan utama.</p>
                </div>

                <!-- Hierarki -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full md:w-2/3">
                    <!-- Sekretaris Desa -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <img src="https://via.placeholder.com/150" alt="Foto Sekretaris Desa" class="w-24 h-24 mx-auto rounded-full mb-4">
                        <h3 class="text-xl font-semibold text-green-600">Sekretaris Desa</h3>
                        <p class="mt-2 text-gray-600">Nama: Bu Siti</p>
                        <p class="text-sm text-gray-500">Bertugas mengelola administrasi desa.</p>
                    </div>
                    <!-- BPD -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <img src="https://via.placeholder.com/150" alt="Foto BPD" class="w-24 h-24 mx-auto rounded-full mb-4">
                        <h3 class="text-xl font-semibold text-green-600">BPD</h3>
                        <p class="mt-2 text-gray-600">Nama: Pak Hadi</p>
                        <p class="text-sm text-gray-500">Mitra pemerintah desa dalam pengambilan keputusan.</p>
                    </div>
                </div>

                <!-- Kasi dan Kaur -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 w-full md:w-2/3">
                    <!-- Kasi Pemerintahan -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <img src="https://via.placeholder.com/150" alt="Foto Kasi Pemerintahan" class="w-24 h-24 mx-auto rounded-full mb-4">
                        <h3 class="text-xl font-semibold text-green-600">Kasi Pemerintahan</h3>
                        <p class="mt-2 text-gray-600">Nama: Pak Budi</p>
                        <p class="text-sm text-gray-500">Mengelola administrasi kependudukan dan tanah.</p>
                    </div>
                    <!-- Kasi Kesejahteraan -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <img src="https://via.placeholder.com/150" alt="Foto Kasi Kesejahteraan" class="w-24 h-24 mx-auto rounded-full mb-4">
                        <h3 class="text-xl font-semibold text-green-600">Kasi Kesejahteraan</h3>
                        <p class="mt-2 text-gray-600">Nama: Pak Yanto</p>
                        <p class="text-sm text-gray-500">Mengurus program kesejahteraan masyarakat.</p>
                    </div>
                    <!-- Kaur Keuangan -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <img src="https://via.placeholder.com/150" alt="Foto Kaur Keuangan" class="w-24 h-24 mx-auto rounded-full mb-4">
                        <h3 class="text-xl font-semibold text-green-600">Kaur Keuangan</h3>
                        <p class="mt-2 text-gray-600">Nama: Bu Lina</p>
                        <p class="text-sm text-gray-500">Bertanggung jawab atas pengelolaan keuangan desa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<div style="margin-top: 160px;" class="text-center mb-8">
    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
        INFORMASI TERKINI
    </h2>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Kartu 1 -->
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105 overflow-hidden ml-11">
        <a href="#">
            <img class="rounded-t-lg w-full" 
                 style="object-fit: cover; max-height: 200px;" 
                 src="..." 
                 alt="Technology Image">
        </a>
        <div class="p-6">
            <a href="#" class="block mb-2">
                <h5 class="text-lg font-bold text-gray-900 dark:text-white hover:text-blue-600 transition-all duration-300">
                    Noteworthy Technology Acquisitions 2021
                </h5>
            </a>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Learn more about the key technology acquisitions that shaped the industry in 2021. Stay updated with the latest trends.
            </p>
        </div>
    </div>

    <!-- Kartu 2 -->
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105 overflow-hidden ml-11">
        <a href="#">
            <img class="rounded-t-lg w-full" 
                 style="object-fit: cover; max-height: 200px;" 
                 src="..." 
                 alt="Technology Image">
        </a>
        <div class="p-6">
            <a href="#" class="block mb-2">
                <h5 class="text-lg font-bold text-gray-900 dark:text-white hover:text-blue-600 transition-all duration-300">
                    Innovations in AI for 2023
                </h5>
            </a>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Discover the groundbreaking innovations in AI that are set to transform industries in 2023 and beyond.
            </p>
        </div>
    </div>

    <!-- Kartu 3 -->
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105 overflow-hidden ml-11">
        <a href="#">
            <img class="rounded-t-lg w-full" 
                 style="object-fit: cover; max-height: 200px;" 
                 src="..." 
                 alt="Technology Image">
        </a>
        <div class="p-6">
            <a href="#" class="block mb-2">
                <h5 class="text-lg font-bold text-gray-900 dark:text-white hover:text-blue-600 transition-all duration-300">
                    Future of Renewable Energy
                </h5>
            </a>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Explore how renewable energy innovations are shaping a sustainable future for the planet.
            </p>
        </div>
    </div>
</div>

<section class="bg-gradient-to-r from-[#399918] via-[#399918] to-[#399918] text-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16" style="margin-top: 160px;">
        <div class="bg-white shadow-lg border border-gray-200 rounded-lg p-8 md:p-12 mb-8">
            <a href="#" class="bg-teal-100 text-teal-600 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md mb-2">
                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                </svg>
            </a>
            <h1 class="text-gray-800 text-3xl md:text-5xl font-extrabold text-center mb-2">Visi dan Misi</h1>
            <p class="text-lg font-normal text-gray-700 text-center mb-6">
                Selamat datang di website resmi Desa [Nama Desa]. Kami berkomitmen untuk memberikan layanan terbaik bagi masyarakat. 
                Berikut adalah Visi dan Misi Desa kami.
            </p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Visi -->
            <div class="bg-teal-100 border border-teal-300 rounded-lg p-8 md:p-12 text-center">
                <a href="#" class="bg-teal-300 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                    </svg>
                    Visi
                </a>
                <h2 class="text-teal-900 text-3xl font-extrabold mb-2">Visi Desa [Nama Desa]</h2>
                <p class="text-lg font-normal text-gray-800 mb-4">
                    Mewujudkan Desa [Nama Desa] yang maju, sejahtera, dan mandiri, dengan masyarakat yang memiliki kualitas hidup yang baik dan berdaya saing.
                </p>
            </div>
            <!-- Misi -->
            <div class="bg-teal-100 border border-teal-300 rounded-lg p-8 md:p-12 text-center">
                <a href="#" class="bg-teal-300 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15" />
                    </svg>
                    Misi
                </a>
                <h2 class="text-teal-900 text-3xl font-extrabold mb-2">Misi Desa [Nama Desa]</h2>
                <p class="text-lg font-normal text-gray-800 mb-4">Meningkatkan kualitas pendidikan dan kesehatan masyarakat.</p>
                <p class="text-lg font-normal text-gray-800 mb-4">Mewujudkan ekonomi desa yang mandiri dan berbasis potensi lokal.</p>
                <p class="text-lg font-normal text-gray-800 mb-4">Meningkatkan pembangunan infrastruktur yang merata di seluruh wilayah desa.</p>
            </div>
        </div>
    </div>
</section>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Pemangkat Kota</title>
</head>
<body>
    <h1 style="margin-top:60px; text-align:center; font-weight:bold; font-size:36px;">Lokasi Desa Sebatuan</h1>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15957.313612471203!2d108.9481375!3d1.1306473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e37da5e9e88ac3%3A0x8982d40974778205!2sJl.%20Desa%20Sebatuan%2C%20Pemangkat%20Kota%2C%20Kec.%20Pemangkat%2C%20Kabupaten%20Sambas%2C%20Kalimantan%20Barat%2079453!5e0!3m2!1sid!2sid!4v1732540895678!5m2!1sid!2sid" 
        width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</body>
      <footer style="color: white; padding: 40px 20px; font-family: Arial, sans-serif;" class="bg-[#399918]">
    <div style="max-width: 1200px; margin: auto; display: flex; align-items: center;">
        <!-- Tambahkan Gambar di Sebelah Kiri -->
        <div style="margin-right: 20px;">
        <img src="{{ asset('img/logo.png') }}" alt="Logo"
        class="h-14" alt="Flowbite Logo" style="width: 120px; height: auto; border-radius: 10px;">
        </div>
        <!-- Konten Teks -->
        <div style="flex: 1;">
            <h3 style="margin-bottom: 10px;">Pemerintah Desa Sebatuan</h3>
            <p style="margin: 5px 0;">Jl. [Nama Jalan], Pemangkat, Kalimantan Barat, Indonesia</p>
            <p style="margin: 5px 0;">Telepon: (0561) 123-456 | Email: info@pemangkat.go.id</p>
            <p style="margin: 5px 0;">Website Resmi: 
                <a href="http://127.0.0.1:8000/" style="color: #FFD700; text-decoration: none;">www.sebatuan.go.id</a>
            </p>
        </div>
        <!-- Ikon Media Sosial -->
        <div style="text-align: right;">
            <a href="https://facebook.com" target="_blank" style="margin: 0 10px;">
                <img src="facebook-icon.png" alt="Facebook" style="width: 30px; transition: transform 0.3s;">
            </a>
            <a href="https://twitter.com" target="_blank" style="margin: 0 10px;">
                <img src="twitter-icon.png" alt="Twitter" style="width: 30px; transition: transform 0.3s;">
            </a>
            <a href="https://www.instagram.com/pemangkatinformation/" target="_blank" style="margin: 0 10px;">
                <img src="instagram-icon.png" alt="Instagram" style="width: 30px; transition: transform 0.3s;">
            </a>
        </div>
    </div>
    <p style="text-align: center; margin-top: 30px; font-size: 14px; color: #E0E0E0;">&copy; 2024 Pemerintah Desa Sebatuan. Semua Hak Dilindungi Undang-undang.</p>
</footer>


</body>
</html>