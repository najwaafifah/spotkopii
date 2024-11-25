<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Krona+One&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                <a href="https://www.instagram.com/najwaaafifah/" class="w-10 h-10 rounded-full flex items-center justify-center text-gray-900">
                <svg xmlns="images/instagram.svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                </a>
                <!-- Call -->
                <a href="tel:+6288226475135" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900">
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