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

<body>
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