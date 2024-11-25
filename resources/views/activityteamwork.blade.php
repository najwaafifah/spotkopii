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
                <img src="{{ asset('images/teamwork.png') }}" alt="Meeting" class="w-full h-64 object-cover rounded-lg">
                <!-- Gradient and Text -->
                <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black to-transparent rounded-lg">
                    <p class="absolute bottom-6 left-8 text-white text-4xl font-bold">Teamwork</p>
                </div>
            </div>
        </div>

        <div class="relative bg-hijau-50 py-10 px-20 space-y-10">
            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/kotaks.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Kotask Café</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Kotask Kaffe adalah tempat nongkrong yang asyik dan nyaman, dengan suasana yang cozy dan menu kopi yang menggugah selera. Cocok untuk kamu yang ingin bersantai, ngobrol bareng teman, atau sekadar menikmati waktu sendiri. Dengan pilihan kopi terbaik dan suasana yang chill, Kotask Kaffe jadi pilihan sempurna untuk menghabiskan waktu sambil menikmati kopi dan camilan enak.</div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 9]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/roketto.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Roketto Coffee & Co</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Roketto Coffee & Co adalah tempat nongkrong yang keren dan santai, menawarkan kopi berkualitas dengan atmosfer yang hangat dan modern. Dilengkapi dengan berbagai pilihan minuman kopi dan makanan ringan, Roketto Coffee & Co adalah tempat yang pas untuk ngobrol bareng teman, bekerja, atau sekadar menikmati waktu santai.</div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 10]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/peskop.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">Pesen Kopi Plus</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            Pesen Kopi Plus adalah tempat nongkrong yang asyik dengan suasana yang nyaman dan santai. Pesen Kopi Plus cocok untuk kamu yang ingin bersantai, ngobrol dengan teman, atau sekadar menikmati waktu sendirian. Dengan atmosfer yang cozy, tempat ini menjadi pilihan tepat untuk menikmati secangkir kopi sambil menikmati obrolan seru atau bekerja dengan tenang.</div>
                        <!-- Button -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('cafe1', ['id' => 11]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w flex flex-col md:flex-row justify-center items-center p-2 pl-2 pr-4 bg-hijau-200 rounded-lg border-2 border-hijau-100">
                <!-- Image Section -->
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/cw.png') }}" alt="Alfath Space" class="w-full h-auto p-10 object-cover rounded-lg">
                </div>

                <!-- Text Section -->
                <div class="flex flex-col w-full md:w-2/3 justify-center items-center p-5">
                    <div class="flex flex-col">
                        <!-- Title -->
                        <div class="text-2xl text-center font-bold pb-5">CW Coffee & Eatery</div>
                        <!-- Description -->
                        <div class="text-gray-700 text-sm leading-relaxed pb-5">
                            CW Coffee & Eatery adalah tempat nongkrong yang nyaman dengan suasana yang cozy dan santai. Menyajikan berbagai pilihan kopi lezat dan makanan ringan yang menggugah selera, CW Coffee & Eatery cocok untuk kamu yang ingin menghabiskan waktu bersama teman, bekerja, atau sekadar bersantai.<!-- Button -->
                            <div class="flex justify-center items-center">
                                <a href="{{ route('cafe1', ['id' => 12]) }}" class="px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
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