<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Krona+One&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>

<body class="bg-hijau-50 font-sans">
    <nav class="bg-hijau-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Section -->
                <div class="flex items-center">
                    <span class="text-xl font-bold text-white">SpotCafe</span>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-[35px]">
                    <a href="#home" class="font-bold text-gray-400 hover:text-white">Home</a>
                    <a href="#profile" class="font-bold text-gray-400 hover:text-white">Profile</a>
                    <a href="#activity" class="font-bold text-gray-400 hover:text-white">By Activity</a>
                </div>

                <!-- User Greeting -->
                <div class="flex items-center space-x-4">
                    <span class="hidden md:block text-gray-300">Hai, <span class="font-medium text-white">Afif!</span></span>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="md:hidden flex items-center">
                    <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <a href="#home" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Home</a>
            <a href="#profile" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
            <a href="#activity" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">By Activity</a>
            <div class="px-4 py-2 text-gray-600">Hai, <span class="font-medium text-gray-800">Afif!</span></div>
        </div>
    </nav>

    <div>
        <div class="relative bg-cover bg-center h-[300px]"
            style="background-image: url('path-to-your-image.jpg');">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div> <!-- Dark overlay -->

            <!-- Text Content -->
            <div class="relative h-full flex flex-col justify-center pl-20 text-left text-white">
                <h1 class="text-4xl font-bold mb-2">Find Your Cafe!</h1>
                <p class="text-xl">Tentukan cafe yang spoties mau</p>
            </div>
        </div>

        <div class="relative bg-cover bg-center h-[300px]">
            <div class="relative h-full flex flex-col justify-center pl-20 py-10 pt-5 text-left text-hijau-300">
                <h1 class="text-3xl font-bold mb-4">What’s Your Plan Today?</h1>
                <p class="text-xl text-gray-500"> Temukan tempat yang pas untuk aktivitasmu</p>
            </div>
        </div>

        <div class="flex flex-col gap-1">
            <div class="flex flex-col md:flex-row items-center gap-8 p-20 pt-5">
                <!-- Left Div -->
                <div class="relative">
                    <!-- Image -->
                    <img src="{{ asset('images/meeting.png') }}" alt="Meeting Cafe"" alt=" Meeting Stock" class="w-64 h-64 rounded-lg border-4 border-coklat-100">
                    <!-- Curved Rectangle with Text -->
                    <div class="font-semibold absolute -bottom-5 left-1/2 transform -translate-x-1/2 bg-hijau-300 text-white text-center px-4 py-2 shadow-xl border-hijau-100">
                        Meeting
                    </div>
                </div>

                <div class="border-l border-gray-500 mx-8 hidden md:block h-40"></div>

                <!-- Right Div -->
                <div class="flex-1 bg-hijau-200 p-6 rounded-lg border-5 border-hijau-300">
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Café-café ini tidak hanya menyediakan tempat nyaman, tetapi juga suasana yang mendukung produktivitas, inspirasi, dan kenyamanan saat bekerja atau meeting.
                        Setiap café memiliki keunggulan tersendiri, mulai dari fasilitas lengkap seperti Wi-Fi cepat, colokan listrik, hingga ruang privat yang dapat disewa untuk meeting
                        lebih eksklusif. Dengan berbagai keunggulan ini, café-café ini menjadi pilihan tempat meeting yang praktis dan inspiratif. Setiap tempat menawarkan pengalaman
                        berbeda yang dapat disesuaikan dengan kebutuhan meeting Spoties untuk memastikan pertemuan yang efektif dan menyenangkan.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-8 p-20 pt-5">
                <!-- Left Div -->
                <div class="relative">
                    <!-- Image -->
                    <img src="{{ asset('images/meeting.png') }}" alt="Meeting Cafe"" alt=" Meeting Stock" class="w-64 h-64 rounded-lg border-4 border-coklat-100">
                    <!-- Curved Rectangle with Text -->
                    <div class="font-semibold absolute -bottom-5 left-1/2 transform -translate-x-1/2 bg-hijau-300 text-white text-center px-4 py-2 shadow-xl border-hijau-100">
                        Meeting
                    </div>
                </div>

                <div class="border-l border-gray-500 mx-8 hidden md:block h-40"></div>

                <!-- Right Div -->
                <div class="flex-1 bg-hijau-200 p-6 rounded-lg border-5 border-hijau-300">
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Café-café ini tidak hanya menyediakan tempat nyaman, tetapi juga suasana yang mendukung produktivitas, inspirasi, dan kenyamanan saat bekerja atau meeting.
                        Setiap café memiliki keunggulan tersendiri, mulai dari fasilitas lengkap seperti Wi-Fi cepat, colokan listrik, hingga ruang privat yang dapat disewa untuk meeting
                        lebih eksklusif. Dengan berbagai keunggulan ini, café-café ini menjadi pilihan tempat meeting yang praktis dan inspiratif. Setiap tempat menawarkan pengalaman
                        berbeda yang dapat disesuaikan dengan kebutuhan meeting Spoties untuk memastikan pertemuan yang efektif dan menyenangkan.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-8 p-20 pt-5">
                <!-- Left Div -->
                <div class="relative">
                    <!-- Image -->
                    <img src="{{ asset('images/meeting.png') }}" alt="Meeting Cafe"" alt=" Meeting Stock" class="w-64 h-64 rounded-lg border-4 border-coklat-100">
                    <!-- Curved Rectangle with Text -->
                    <div class="font-semibold absolute -bottom-5 left-1/2 transform -translate-x-1/2 bg-hijau-300 text-white text-center px-4 py-2 shadow-xl border-hijau-100">
                        Meeting
                    </div>
                </div>

                <div class="border-l border-gray-500 mx-8 hidden md:block h-40"></div>

                <!-- Right Div -->
                <div class="flex-1 bg-hijau-200 p-6 rounded-lg border-5 border-hijau-300">
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Café-café ini tidak hanya menyediakan tempat nyaman, tetapi juga suasana yang mendukung produktivitas, inspirasi, dan kenyamanan saat bekerja atau meeting.
                        Setiap café memiliki keunggulan tersendiri, mulai dari fasilitas lengkap seperti Wi-Fi cepat, colokan listrik, hingga ruang privat yang dapat disewa untuk meeting
                        lebih eksklusif. Dengan berbagai keunggulan ini, café-café ini menjadi pilihan tempat meeting yang praktis dan inspiratif. Setiap tempat menawarkan pengalaman
                        berbeda yang dapat disesuaikan dengan kebutuhan meeting Spoties untuk memastikan pertemuan yang efektif dan menyenangkan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-hijau-300 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6 py-8">
            <!-- Main Title -->
            <h1 class="text-2xl xl:text-4xl font-bold mb-4">SpotCafe</h1>

            <!-- Description -->
            <p class="text-sm leading-relaxed mb-8">
                Sedang cari cafe yang cocok dengan mood-mu? SpotCafe hadir buat bantu kamu menemukan tempat yang pas,
                entah untuk hangout santai bareng teman, kumpul rame-rame, atau fokus meeting dengan suasana yang mendukung.
                Dari cafe cozy untuk me-time, spot asik buat ngobrol seru, hingga tempat tenang buat meeting produktif, semua ada di SpotCafe.
                Temukan rekomendasi cafe yang paling sesuai dengan vibe dan kebutuhanmu hanya dengan beberapa tap!
            </p>

            <!-- Social Media Icons -->
            <div class="flex items-center space-x-4 mb-6">
                <!-- Instagram -->
                <a href="https://instagram.com" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900">
                    <img src="https://cdn.jsdelivr.net/npm/heroicons@2.0.0/24/outline/camera.svg" alt="Instagram" class="w-6 h-6">
                </a>
                <!-- Facebook -->
                <a href="https://facebook.com" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900">
                    <img src="https://cdn.jsdelivr.net/npm/heroicons@2.0.0/24/outline/bookmark.svg" alt="Facebook" class="w-6 h-6">
                </a>
                <!-- TikTok -->
                <a href="https://tiktok.com" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900">
                    <img src="https://cdn.jsdelivr.net/npm/heroicons@2.0.0/24/outline/video-camera.svg" alt="TikTok" class="w-6 h-6">
                </a>
                <!-- Call -->
                <a href="tel:+123456789" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900">
                    <img src="https://cdn.jsdelivr.net/npm/heroicons@2.0.0/24/outline/phone.svg" alt="Call" class="w-6 h-6">
                </a>
            </div>

            <div class="border-t border-gray-300 my-8"></div>

            <div class="text-center">
                <p class="text-md">Copyright © 2024 | By Kelompok 9</p>
            </div>

        </div>
    </footer>
</body>

</html>