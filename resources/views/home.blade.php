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
    @extends('layouts.app')
    @section('title', 'Home')
    @section('content')
</head>

<body class="bg-hijau-50 font-sans">
    <div>
        <div class="relative bg-cover bg-center h-[300px]"
            style="background-image: url('{{ asset('images/BgHome.png') }}')">

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
                <a href="{{ route('activitymeeting') }}" class="block">
                    <div class="relative">
                        <!-- Image -->
                        <img src="{{ asset('images/bagian1.png') }}" alt="Meeting Cafe" class="w-64 h-64 rounded-lg border-4 border-coklat-100">
                        <!-- Curved Rectangle with Text -->
                        <div class="font-semibold absolute -bottom-5 left-1/2 transform -translate-x-1/2 bg-hijau-300 text-white text-center px-4 py-2 shadow-xl border-hijau-100">
                            Meeting
                        </div>
                    </div>
                </a>

                <div class="border-l border-gray-500 mx-8 hidden md:block h-40"></div>

                <!-- Right Div -->
                <div class="flex-1 bg-hijau-200 p-6 rounded-lg border-2 border-hijau-300">
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
                <a href="{{ route('activityfocus') }}" class="block">
                    <div class="relative">
                        <!-- Image -->
                        <img src="{{ asset('images/meeting.png') }}" alt="Meeting Cafe"" alt=" Meeting Stock" class="w-64 h-64 rounded-lg border-4 border-coklat-100">
                        <!-- Curved Rectangle with Text -->
                        <div class="font-semibold absolute -bottom-5 left-1/2 transform -translate-x-1/2 bg-hijau-300 text-white text-center px-4 py-2 shadow-xl border-hijau-100">
                            Focus Time
                        </div>
                    </div>
                </a>

                <div class="border-l border-gray-500 mx-8 hidden md:block h-40"></div>

                <!-- Right Div -->
                <div class="flex-1 bg-hijau-200 p-6 rounded-lg border-2 border-hijau-300">
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Café-café ini juga menjadi pilihan sempurna untuk me-time, menawarkan suasan yang tenang dan nyaman bagi Spoties yang ingin menghabiskan waktu sendirian, bersantai, atau sekedar melarikan diri dari rutinitas sehari-hari. Dengan berbagai fasilitas dan suasana yang di tawarkan, cafe-cafe ini tidak hanya sekedar tempat minum kopi, tetapi juga lokasi ideal untuk menikmati waktu berkualitas sendirian. Setiap cafe memiliki pesonanya masing-masing, sehingga Spoties bisa memilih tempat yang paling sesuai dengan kebutuhan me-time Spoties untuk mendapatkan ketenangan dan kesegaran baru.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-8 p-20 pt-5">
                <!-- Left Div -->
                <a href="{{ route('activityteamwork') }}" class="block">
                    <div class="relative">
                        <!-- Image -->
                        <img src="{{ asset('images/bagian2.png') }}" alt="Meeting Cafe"" alt=" Meeting Stock" class="w-64 h-64 rounded-lg border-4 border-coklat-100">
                        <!-- Curved Rectangle with Text -->
                        <div class="font-semibold absolute -bottom-5 left-1/2 transform -translate-x-1/2 bg-hijau-300 text-white text-center px-4 py-2 shadow-xl border-hijau-100">
                            Teamwork
                        </div>
                    </div>
                </a>

                <div class="border-l border-gray-500 mx-8 hidden md:block h-40"></div>

                <!-- Right Div -->
                <div class="flex-1 bg-hijau-200 p-6 rounded-lg border-2 border-hijau-300">
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Café-café ini juga menjadi pilihan ideal untuk nongkrong bersama teman-teman. Dengan suasana yang santai, dekorasi yang estetik, dan menu yang variatif, cafe-cafe ini menawarkan pengalaman berkumpul yang menyenangkan. Dengan suasana yang menyenangkan, pilihan menu yang beragam, dan tempat yang nyaman, cafe-cafe ini bisa menjadi spot favorit untuk nongkrong. Baik untuk sekedar ngobrol santai, menikmati minuman favorit atau menghabiskan waktu berkualitas bersama teman-teman, cafe-cafe ini menyediakan semua yang dibutuhkan untuk nongkrong yang seru dan memorable.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection

</html>