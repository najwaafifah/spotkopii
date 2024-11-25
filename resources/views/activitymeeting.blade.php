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
        <div class="relative w-full max-w p-20">
            <!-- Image -->
            <div class="relative">
                <img src="{{ asset('images/image.png') }}" alt="Meeting" class="w-full h-64 object-cover rounded-lg">
                <!-- Gradient and Text -->
                <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black to-transparent rounded-lg">
                    <p class="absolute bottom-6 left-8 text-white text-4xl font-bold">Meeting</p>
                </div>
            </div>
        </div>

        <div class="relative bg-hijau-50 py-10 px-20 space-y-10">
            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/alfath.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Alfath Space</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Alfath Cafe hadir sebagai salah satu tempat paling nyaman di Malang, yang tak hanya menyediakan sajian kuliner nikmat, tetapi juga suasana ideal untuk para pelajar dan mahasiswa yang ingin mengerjakan tugas. Dengan desain interior yang nyaman dan atmosfer tenang, Alfath Cafe semakin populer di kalangan anak muda sebagai tempat nugas yang menyenangkan.
                        </div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 1]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/dialoogi.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Dialoogi space and coffeee</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Dialoogi Space and Coffee adalah tempat nongkrong asik dan cozy yang menggabungkan suasana kafe dengan ruang kreatif. Dengan desain interior yang modern dan nyaman, Dialoogi cocok untuk kamu yang ingin bekerja, belajar, atau sekadar bersantai bersama teman-teman. Di sini, kamu bisa menikmati beragam kopi spesial, camilan, dan hidangan lezat lainnya.</div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 2]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/seven.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">7 Seven Chicken</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            7 Seven Chicken adalah restoran cepat saji yang tidak hanya menawarkan hidangan ayam lezat dan terjangkau, tetapi juga menyediakan suasana yang nyaman dan ruang yang cukup luas, menjadikannya tempat yang cocok untuk berbagai keperluan, termasuk meeting atau pertemuan kecil, kamu bisa menikmati sajian berkualitas sambil berdiskusi dengan kolega atau teman dalam suasana yang santai. </div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 3]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/flava.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Flava Cafe</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Flava Coffee adalah kafe dengan nuansa hangat dan penuh karakter, ideal untuk kamu yang ingin menikmati kopi nikmat dalam suasana nyaman dan santai. Dengan ruang yang nyaman dan suasana tenang, Flava Coffee juga menjadi pilihan tepat untuk mengadakan meeting atau pertemuan kecil, sehingga kamu bisa berdiskusi sambil menikmati sajian berkualitas dalam atmosfer yang cozy dan profesional.</div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 4]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

@endsection

</html>