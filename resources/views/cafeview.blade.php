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
        <div class="flex flex-col gap-5 px-8 py-10 bg-hijau-50 h-max">
            <!-- Back Button -->
            <div class="flex items-start">
                <button onclick="history.back()" class="flex items-center text-blue-500 font-semibold space-x-3 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span class="text-lg">Back</span>
                </button>
            </div>


            <!-- Cafe Information -->
            <div class="flex-1 shadow-lg p-8 space-y-8">
                <!-- Cafe Name and Icon -->
                <div class="flex justify-center">
                    <div class="flex items-center space-x-4">
                        <!-- Cafe Icon -->
                        <div class="w-10 h-10 bg-hijau-300 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 16l-3.5 2 1-4.5L3 9h4.5L8 5l1.5 4H14l-3 3.5 1 4-3.5-2z" />
                            </svg>
                        </div>
                        <!-- Cafe Name -->
                        <h1 class="text-2xl font-bold text-gray-800">{{ $cafe->name }}</h1>
                    </div>
                </div>

                <!-- Cafe Description -->
                <div class="space-y-2 p-2">
                    <h2 class="text-lg font-semibold text-gray-800">Deskripsi</h2>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $cafe->deskripsi }}
                    </p>
                </div>

                <!-- Cafe Address -->
                <div class="space-y-2 p-2">
                    <h2 class="text-lg font-semibold text-gray-800">Alamat</h2>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $cafe->location }}
                    </p>
                </div>

                <!-- Cafe Opening and Closing Hours -->
                <div class="p-2 pb-2 grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <h2 class="text-lg font-semibold text-gray-800">Jam Buka</h2>
                        <p class="text-gray-700 leading-relaxed">{{ $cafe->jam_buka }}</p>
                    </div>
                    <div class="space-y-2">
                        <h2 class="text-lg font-semibold text-gray-800">Jam Tutup</h2>
                        <p class="text-gray-700 leading-relaxed">{{ $cafe->jam_tutup }}</p>
                    </div>
                </div>
            </div>


            <!-- Review -->
            <div class="bg-hijau-50 p-6 rounded-lg shadow-lg space-y-8">
                <div class="space-y-4">
                    <!-- Ulasan Title -->
                    <h3 class="text-xl font-semibold text-gray-800">Ulasan</h3>

                    <!-- Thin Rectangle Border -->
                    <div class="h-1 bg-hijau-200 mt-1"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left: Ratings and Review Form -->
                    <div class="space-y-4">
                        <!-- Ratings -->
                        <div class="flex items-center space-x-2">
                            <!-- Rating Number -->
                            <p class="text-3xl font-bold text-gray-800">{{ $averageRating }}</p>
                            <!-- Star Icons (Interactive) -->
                            <div class="flex space-x-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 {{ $i <= $averageRating ? 'text-yellow-500' : 'text-gray-300' }} cursor-pointer hover:text-yellow-400" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                    <path d="M12 17.75L18.16 21l-1.6-6.8L21 9.75l-7-1L12 3l-2 5.75-7 1 4.44 4.45L5.84 21z" />
                                    </svg>
                                    @endfor
                            </div>
                        </div>

                        <!-- Review Form -->
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Submit Your Review</h3>
                            <form action="{{ route('reviews.submit', ['id' => $cafe->id]) }}" method="POST">
                                @csrf <!-- CSRF Protection -->
                                <!-- Review Text -->
                                <div class="mb-4">
                                    <textarea
                                        name="review"
                                        rows="4"
                                        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-hijau-300"
                                        placeholder="Your review here..."></textarea>
                                </div>

                                <!-- Star Rating -->
                                <div class="flex flex-col md:flex-row justify-between md:space-x-4">
                                    <div class="flex flex-col md:flex-row items-start space-x-2 mb-4">
                                        <label for="rating" class="text-gray-800 font-semibold">Rating</label>
                                        <div class="flex space-x-1">
                                            <!-- Radio Buttons for Rating (1 to 5 Stars) -->
                                            <input type="radio" id="star5" name="rating" value="1" class="hidden peer" />
                                            <label for="star5" class="cursor-pointer text-yellow-500 text-2xl peer-checked:text-yellow-500">★</label>

                                            <input type="radio" id="star4" name="rating" value="2" class="hidden peer" />
                                            <label for="star4" class="cursor-pointer text-yellow-500 text-2xl peer-checked:text-yellow-500">★</label>

                                            <input type="radio" id="star3" name="rating" value="3" class="hidden peer" />
                                            <label for="star3" class="cursor-pointer text-yellow-500 text-2xl peer-checked:text-yellow-500">★</label>

                                            <input type="radio" id="star2" name="rating" value="4" class="hidden peer" />
                                            <label for="star2" class="cursor-pointer text-yellow-500 text-2xl peer-checked:text-yellow-500">★</label>

                                            <input type="radio" id="star1" name="rating" value="5" class="hidden peer" />
                                            <label for="star1" class="cursor-pointer text-yellow-500 text-2xl peer-checked:text-yellow-500">★</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="mt-4 px-4 py-2 bg-hijau-300 text-white rounded-lg hover:bg-hijau-50">
                                    Submit
                                </button>
                            </form>

                        </div>
                    </div>

                    <!-- Right: Reviews List -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-800">Reviews</h3>

                        @foreach ($ratings as $review)
                        <!-- Single Review -->
                        <div class="bg-white p-4 rounded-lg shadow space-y-2">
                            <div class="flex space-x-1">
                                <!-- Stars for review -->
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 {{ $i <= $review->rating ? 'text-yellow-500' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                    <path d="M12 17.75L18.16 21l-1.6-6.8L21 9.75l-7-1L12 3l-2 5.75-7 1 4.44 4.45L5.84 21z" />
                                    </svg>
                                    @endfor
                            </div>
                            <p class="text-sm text-gray-800">
                                "{{ $review->review_text }}"
                            </p>
                            <span class="text-sm text-gray-500">- {{ $review->nama_reviewer }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
</body>

@endsection

</html>