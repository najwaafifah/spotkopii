<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\Cafe;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        Review::create([
            'cafe_id' => 1,
            'nama_reviewer' => 'Mark Lee',
            'rating' => 5,
            'review_text' => 'I absolutely loved my visit to Alfath Cafe! The atmosphere was cozy...',
        ]);

        Review::create([
            'cafe_id' => 1,
            'nama_reviewer' => 'Zayn Malik',
            'rating' => 3,
            'review_text' => 'The place looks nice, but the service left much to be desired...',
        ]);

        Review::create([
            'cafe_id' => 1,
            'nama_reviewer' => 'Beyonce',
            'rating' => 4,
            'review_text' => 'The coffee was good, although I’ve had better elsewhere.',
        ]);

        Review::create([
            'cafe_id' => 2,
            'nama_reviewer' => 'Eric',
            'rating' => 5,
            'review_text' => 'Such a wonderful experience at Dialoogi! The cozy vibe made it perfect...',
        ]);

        Review::create([
            'cafe_id' => 2,
            'nama_reviewer' => 'Ariana Grande',
            'rating' => 3,
            'review_text' => '“The staff were friendly but seemed a bit overwhelmed. I’m not sure I’ll return.”',
        ]);
        
        Review::create([
            'cafe_id' => 2,
            'nama_reviewer' => 'Harry Styles',
            'rating' => 4,
            'review_text' => '“I had a good time at Dialoogi, but it wasn’t extraordinary.”',
        ]);

        Review::create([
            'cafe_id' => 3,
            'nama_reviewer' => 'Jehyun Jung',
            'rating' => 5,
            'review_text' => '“The vibe is so chill, and it\'s a great place to hang out with friends or just read a book.”',
        ]);
        
        Review::create([
            'cafe_id' => 3,
            'nama_reviewer' => 'Kanye West',
            'rating' => 3,
            'review_text' => '“The staff were friendly but seemed disorganized, and I had to wait far too long for my order. It wasn’t a terrible experience actually.”',
        ]);
        
        Review::create([
            'cafe_id' => 3,
            'nama_reviewer' => 'Eminem',
            'rating' => 4,
            'review_text' => '“Service was good, but we had to wait a while for our drinks. Overall, it’s a nice place to stop by.”',
        ]);
        
        Review::create([
            'cafe_id' => 4,
            'nama_reviewer' => 'Bruno Mars',
            'rating' => 5,
            'review_text' => '“The service was excellent, with the staff checking in on us without being intrusive. I’ll definitely be coming back to try more of their menu!”',
        ]);
        
        Review::create([
            'cafe_id' => 4,
            'nama_reviewer' => 'Justin Bieber',
            'rating' => 3,
            'review_text' => '“The atmosphere didn’t feel welcoming, and it was a bit too noisy for a relaxing visit.”',
        ]);
        
        Review::create([
            'cafe_id' => 4,
            'nama_reviewer' => 'Dove Cameron',
            'rating' => 4,
            'review_text' => '“The service was friendly, though a bit slow. Overall, it’s a nice place, but I think there’s room for improvement.”',
        ]);

        Review::create([
            'cafe_id' => 5,
            'nama_reviewer' => 'Adele',
            'rating' => 5,
            'review_text' => '“If you\'re looking for a cozy café to relax, look no further than Kopi Tuju. The ambiance is calm and stylish, and the coffee is fantastic.”',
        ]);
        
        Review::create([
            'cafe_id' => 5,
            'nama_reviewer' => 'Rihanna',
            'rating' => 3,
            'review_text' => '“The coffee was tasty, but I wish it had a bit more flavor. The café has a welcoming vibe, but it felt a little crowded, which made it hard to relax.”',
        ]);
        
        Review::create([
            'cafe_id' => 5,
            'nama_reviewer' => 'Will Smith',
            'rating' => 4,
            'review_text' => '“The coffee was decent, and the staff were friendly, though they seemed a little rushed. The atmosphere was nice but felt a bit cramped during peak hours.”',
        ]);
        
        Review::create([
            'cafe_id' => 6,
            'nama_reviewer' => 'Lady Gaga',
            'rating' => 5,
            'review_text' => '“The staff were friendly, and while the place got a little busy, the service was efficient. A nice place to spend time with friends or relax alone.”',
        ]);
        
        Review::create([
            'cafe_id' => 6,
            'nama_reviewer' => 'Will Smith',
            'rating' => 3,
            'review_text' => '“The atmosphere is cozy, though the café did get a little crowded, making it harder to enjoy the experience fully.”',
        ]);
        
        Review::create([
            'cafe_id' => 6,
            'nama_reviewer' => 'Ed Sheeran',
            'rating' => 4,
            'review_text' => '“The atmosphere is cozy, and it’s a great place to hang out or get some work done. The coffee was good, but I was expecting it to be a little hotter.”',
        ]);
        
        Review::create([
            'cafe_id' => 7,
            'nama_reviewer' => 'Taylor Swift',
            'rating' => 5,
            'review_text' => '“The ambiance at Handal is really charming, and it’s perfect for relaxing with friends or getting some quiet time.”',
        ]);
        
        Review::create([
            'cafe_id' => 7,
            'nama_reviewer' => 'Dua Lipa',
            'rating' => 3,
            'review_text' => '“The staff were courteous, though the service could have been a bit quicker. Still, it’s a great spot to hang out and unwind.”',
        ]);
        
        Review::create([
            'cafe_id' => 7,
            'nama_reviewer' => 'Cardi B',
            'rating' => 4,
            'review_text' => '“The staff were friendly and efficient. It’s a popular spot, so it was a bit hard to find seating, but I’d still come back.”',
        ]);
        
        Review::create([
            'cafe_id' => 8,
            'nama_reviewer' => 'Zendaya',
            'rating' => 5,
            'review_text' => '“The café has a nice ambiance and is good for a casual visit. I tried their signature drink, which was enjoyable but a bit pricey for the portion.”',
        ]);
        
        Review::create([
            'cafe_id' => 8,
            'nama_reviewer' => 'Tom Holland',
            'rating' => 3,
            'review_text' => '“The seating felt a bit cramped, and the noise level was a bit much. The staff were polite, but the service was slower than I’d like.”',
        ]);
        
        Review::create([
            'cafe_id' => 8,
            'nama_reviewer' => 'Kylie Jenner',
            'rating' => 4,
            'review_text' => '“The space is cozy, though a bit cramped during busier hours. I’d still recommend it for the friendly service and relaxed vibe.”',
        ]);
        
        Review::create([
            'cafe_id' => 9,
            'nama_reviewer' => 'Tom Cruise',
            'rating' => 5,
            'review_text' => '“Absolutely loved Kotask! The ambiance is just perfect – modern yet cozy, with a warm lighting that makes you want to stay for hours.”',
        ]);
        
        Review::create([
            'cafe_id' => 9,
            'nama_reviewer' => 'Chris Pratt',
            'rating' => 3,
            'review_text' => '“The coffee was okay but not memorable. The seating area felt small, and it was hard to find a comfortable spot.”',
        ]);
        
        Review::create([
            'cafe_id' => 9,
            'nama_reviewer' => 'Michael B. J',
            'rating' => 4,
            'review_text' => '“Had an okay experience at Kotask Café. The coffee was good, though not as bold as I like. The seating was a bit limited, but the staff were kind.”',
        ]);
        
        Review::create([
            'cafe_id' => 10,
            'nama_reviewer' => 'Jeno Lee',
            'rating' => 5,
            'review_text' => '“What a delightful spot! Roketto Coffee & Co has a unique charm and a comfortable setting that makes you want to stay all day.”',
        ]);
        
        Review::create([
            'cafe_id' => 10,
            'nama_reviewer' => 'Gigi Hadid',
            'rating' => 3,
            'review_text' => '“The staff were kind, but it took a while to get my drink. Not a bad place, but could use some improvements.”',
        ]);
        
        Review::create([
            'cafe_id' => 10,
            'nama_reviewer' => 'Robert Downey',
            'rating' => 4,
            'review_text' => '“The staff was friendly, and the atmosphere is nice for a quick visit. It’s a good spot.”',
        ]);
        
        Review::create([
            'cafe_id' => 11,
            'nama_reviewer' => 'Camila Cabello',
            'rating' => 5,
            'review_text' => '“The staff were kind and attentive. Highly recommend for anyone who loves a relaxing coffee spot!”',
        ]);
        
        Review::create([
            'cafe_id' => 11,
            'nama_reviewer' => 'Jessie J',
            'rating' => 3,
            'review_text' => '“The place itself is cute, but the seating was a bit uncomfortable. The staff were nice, but it took a while to get served.”',
        ]);
        
        Review::create([
            'cafe_id' => 11,
            'nama_reviewer' => 'Miley Cyrus',
            'rating' => 4,
            'review_text' => '“Cute café with friendly staff. The decor is lovely, and the coffee was alright – just nothing extraordinary.”',
        ]);
        
        Review::create([
            'cafe_id' => 12,
            'nama_reviewer' => 'Shawn Mendes',
            'rating' => 5,
            'review_text' => '“Great place to spend an afternoon! CW Coffee & Eatery has such a charming, relaxed atmosphere, and the coffee is wonderful.”',
        ]);
        
        Review::create([
            'cafe_id' => 12,
            'nama_reviewer' => 'Doja Cat',
            'rating' => 3,
            'review_text' => '“Staff were polite but seemed stretched thin. Not a bad place, but it could use a few improvements.”',
        ]);
        
        Review::create([
            'cafe_id' => 12,
            'nama_reviewer' => 'Ava Max',
            'rating' => 4,
            'review_text' => '“Stopped by CW Coffee & Eatery for a quick coffee. The place has a cozy vibe, but the coffee was just okay – a bit weaker than I like.”',
        ]);
        
    }
}
