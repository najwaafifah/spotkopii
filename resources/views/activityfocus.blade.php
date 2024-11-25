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
                <img src="{{ asset('images/meeting.png') }}" alt="Meeting" class="w-full h-64 object-cover rounded-lg">
                <!-- Gradient and Text -->
                <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black to-transparent rounded-lg">
                    <p class="absolute bottom-6 left-8 text-white text-4xl font-bold">Focus Time</p>
                </div>
            </div>
        </div>

        <div class="relative bg-hijau-50 py-10 px-20 space-y-10">
            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/kopituju.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Kopi Tuju</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Kopi Tuju adalah kafe yang pas untuk kamu yang ingin menikmati me-time dengan suasana tenang dan nyaman. Dengan interior yang cozy dan suasana yang damai, Kopi Tuju menciptakan tempat ideal untuk bersantai, membaca buku, atau sekadar menikmati waktu sendiri dengan secangkir kopi</div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 5]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/sejenak.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Sejenak Coffee House</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Sejenak Coffee House adalah kafe yang menghadirkan suasana hangat dan nyaman, cocok untuk mengambil jeda sejenak dari rutinitas. Dengan desain interior yang homey dan tenang, Sejenak Coffee House menawarkan kopi berkualitas serta aneka hidangan lezat untuk menemani waktu santai atau pertemuan ringan. Baik untuk me-time, bekerja, atau berkumpul bersama teman</div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 6]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/handal.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Handal Coffee</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Handal Coffee adalah tempat sempurna bagi kamu yang ingin menikmati me-time dengan secangkir kopi berkualitas. Didesain dengan suasana yang tenang dan nyaman, kafe ini cocok untuk momen santai sendirian, Handal Coffee menyediakan lingkungan yang hangat dan damai, ideal untuk membaca, merenung, atau sekadar menikmati waktu sendiri.</div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 7]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/monstera.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Monstera Café</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Monstera Cafe adalah kafe modern dengan sentuhan alami yang menghadirkan suasana hijau dan segar, cocok untuk kamu yang ingin melepas penat di tengah keseharian. Dikelilingi oleh dekorasi tanaman yang asri dan interior minimalis, Monstera Cafe menawarkan pengalaman ngopi yang menenangkan. Tempat yang ideal untuk menikmati suasana cozy dan relaksasi dengan secangkir kopi di tangan.<!-- Button -->
                            <div class="flex justify-center items-center">
                                <a href="{{ route('cafe1', ['id' => 8]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
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