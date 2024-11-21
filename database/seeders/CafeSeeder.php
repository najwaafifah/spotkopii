<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use App\Models\Cafe;
use Illuminate\Database\Seeder;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Cafe::create([
            'name' => 'Alfath Coffee & Space',
            'location' => 'Jl. Kalpataru No.145 a, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141',
            'jam_buka' => '09.00 WIB',
            'jam_tutup' => '22.00 WIB',
            'deskripsi' => 'Alfath Cafe hadir sebagai salah satu tempat paling nyaman di Malang, yang tak hanya menyediakan sajian kuliner nikmat, tetapi juga suasana ideal untuk para pelajar dan mahasiswa yang ingin mengerjakan tugas. Dengan desain interior yang nyaman dan atmosfer tenang, Alfath Cafe semakin populer di kalangan anak muda sebagai tempat nugas yang menyenangkan. ',
            'cafe_category' => 'Meeting'
        ]);

        Cafe::create([
            'name' => 'Dialoogi space and coffee',
            'location' => 'Jl. Soekarno Hatta No.D-505, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141',
            'jam_buka' => '09.00 WIB',
            'jam_tutup' => '23.00 WIB',
            'deskripsi' => 'Dialoogi Space and Coffee adalah tempat nongkrong asik dan cozy yang menggabungkan suasana kafe dengan ruang kreatif. Dengan desain interior yang modern dan nyaman, Dialoogi cocok untuk kamu yang ingin bekerja, belajar, atau sekadar bersantai bersama teman-teman. Di sini, kamu bisa menikmati beragam kopi spesial, camilan, dan hidangan lezat lainnya.',
            'cafe_category' => 'Meeting'
        ]);

        Cafe::create([
            'name' => '7 Seven Chicken',
            'location' => 'Komplek Ruko Grand Soekarno Hatta, Jl. Soekarno Hatta No.33, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142',
            'jam_buka' => '24 JAM',
            'jam_tutup' => '24 JAM',
            'deskripsi' => '7 Seven Chicken adalah restoran cepat saji yang tidak hanya menawarkan hidangan ayam lezat dan terjangkau, tetapi juga menyediakan suasana yang nyaman dan ruang yang cukup luas, menjadikannya tempat yang cocok untuk berbagai keperluan, termasuk meeting atau pertemuan kecil, kamu bisa menikmati sajian berkualitas sambil berdiskusi dengan kolega atau teman dalam suasana yang santai.',
            'cafe_category' => 'Meeting', // Adjust the category if needed
        ]);

        Cafe::create([
            'name' => 'Flava Cafe',
            'location' => 'Jl. Simpang Gajayana, RT.05/RW01, Merjosari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144',
            'jam_buka' => '16.00 WIB',
            'jam_tutup' => '23.30 WIB',
            'deskripsi' => 'Flava Coffee adalah kafe dengan nuansa hangat dan penuh karakter, ideal untuk kamu yang ingin menikmati kopi nikmat dalam suasana nyaman dan santai. Dengan ruang yang nyaman dan suasana tenang, Flava Coffee juga menjadi pilihan tepat untuk mengadakan meeting atau pertemuan kecil, sehingga kamu bisa berdiskusi sambil menikmati sajian berkualitas dalam atmosfer yang cozy dan profesional.',
            'cafe_category' => 'Meeting', // Adjust the category if needed
        ]);

        Cafe::create([
            'name' => 'Kopi Tuju',
            'location' => 'Jalan Sutan Syahrir No. 7, Sukoharjo, Kec. Klojen, Kota Malang, Jawa Timur 65117',
            'jam_buka' => '09.00 WIB',
            'jam_tutup' => '22.00 WIB',
            'deskripsi' => 'Kopi Tuju adalah kafe yang pas untuk kamu yang ingin menikmati me-time dengan suasana tenang dan nyaman. Dengan interior yang cozy dan suasana yang damai, Kopi Tuju menciptakan tempat ideal untuk bersantai, membaca buku, atau sekadar menikmati waktu sendiri dengan secangkir kopi',
            'cafe_category' => 'Focus Time'
        ]);

        Cafe::create([
            'name' => 'Sejenak Coffee House',
            'location' => 'Jl. Bunga Mondokaki No.30, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141​',
            'jam_buka' => '07.00 WIB',
            'jam_tutup' => '22.00 WIB',
            'deskripsi' => 'Sejenak Coffee House adalah kafe yang menghadirkan suasana hangat dan nyaman, cocok untuk mengambil jeda sejenak dari rutinitas. Dengan desain interior yang homey dan tenang, Sejenak Coffee House menawarkan kopi berkualitas serta aneka hidangan lezat untuk menemani waktu santai atau pertemuan ringan. Baik untuk me-time, bekerja, atau berkumpul bersama teman',
            'cafe_category' => 'Focus Time'
        ]);

        Cafe::create([
            'name' => 'Handal Coffee',
            'location' => 'Jl. Semanggi Timur No.7, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141',
            'jam_buka' => '06.00 WIB',
            'jam_tutup' => '22.00 WIB',
            'deskripsi' => 'Handal Coffee adalah tempat sempurna bagi kamu yang ingin menikmati me-time dengan secangkir kopi berkualitas. Didesain dengan suasana yang tenang dan nyaman, kafe ini cocok untuk momen santai sendirian, Handal Coffee menyediakan lingkungan yang hangat dan damai, ideal untuk membaca, merenung, atau sekadar menikmati waktu sendiri.',
            'cafe_category' => 'Focus Time'
        ]);
        
        Cafe::create([
            'name' => 'Monstera Café',
            'location' => 'Jl. Sawah De krup, Bulukerto, Bumiaji, Batu City, East Java 65334',
            'jam_buka' => '10.00 WIB',
            'jam_tutup' => '23.00 WIB',
            'deskripsi' => 'Monstera Cafe adalah kafe modern dengan sentuhan alami yang menghadirkan suasana hijau dan segar, cocok untuk kamu yang ingin melepas penat di tengah keseharian. Dikelilingi oleh dekorasi tanaman yang asri dan interior minimalis, Monstera Cafe menawarkan pengalaman ngopi yang menenangkan. Tempat yang ideal untuk menikmati suasana cozy dan relaksasi dengan secangkir kopi di tangan.',
            'cafe_category' => 'Focus Time'
        ]);
        
        Cafe::create([
            'name' => 'Kotask Café',
            'location' => 'Jl. Raya Langsep No.2B, Pisang Candi, Kec. Sukun, Kota Malang, Jawa Timur 65146',
            'jam_buka' => '24 Jam',
            'jam_tutup' => '24 Jam',
            'deskripsi' => 'Kotask Kaffe adalah tempat nongkrong yang asyik dan nyaman, dengan suasana yang cozy dan menu kopi yang menggugah selera. Cocok untuk kamu yang ingin bersantai, ngobrol bareng teman, atau sekadar menikmati waktu sendiri. Dengan pilihan kopi terbaik dan suasana yang chill, Kotask Kaffe jadi pilihan sempurna untuk menghabiskan waktu sambil menikmati kopi dan camilan enak.',
            'cafe_category' => 'Teamwork'
        ]);
        
        Cafe::create([
            'name' => 'Roketto Coffee & Co',
            'location' => 'Jl. Kendalsari No.06, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141',
            'jam_buka' => '24 Jam',
            'jam_tutup' => '24 Jam',
            'deskripsi' => 'Roketto Coffee & Co adalah tempat nongkrong yang keren dan santai, menawarkan kopi berkualitas dengan atmosfer yang hangat dan modern. Dilengkapi dengan berbagai pilihan minuman kopi dan makanan ringan, Roketto Coffee & Co adalah tempat yang pas untuk ngobrol bareng teman, bekerja, atau sekadar menikmati waktu santai.',
            'cafe_category' => 'Teamwork'
        ]);
        
        Cafe::create([
            'name' => 'Pesen Kopi Plus',
            'location' => 'Jl. Mayjend Panjaitan No.191, Penanggungan, Kec. Klojen, Kota Malang, Jawa Timur 65113',
            'jam_buka' => '11.00 WIB',
            'jam_tutup' => '23.45 WIB',
            'deskripsi' => 'Pesen Kopi Plus adalah tempat nongkrong yang asyik dengan suasana yang nyaman dan santai. Pesen Kopi Plus cocok untuk kamu yang ingin bersantai, ngobrol dengan teman, atau sekadar menikmati waktu sendirian. Dengan atmosfer yang cozy, tempat ini menjadi pilihan tepat untuk menikmati secangkir kopi sambil menikmati obrolan seru atau bekerja dengan tenang.',
            'cafe_category' => 'Teamwork'
        ]);
        
        Cafe::create([
            'name' => 'CW Coffee & Eatery',
            'location' => 'Jl. Simpang Ijen No.39 Blok B, Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur 65112',
            'jam_buka' => '24 Jam',
            'jam_tutup' => '24 Jam',
            'deskripsi' => 'CW Coffee & Eatery adalah tempat nongkrong yang nyaman dengan suasana yang cozy dan santai. Menyajikan berbagai pilihan kopi lezat dan makanan ringan yang menggugah selera, CW Coffee & Eatery cocok untuk kamu yang ingin menghabiskan waktu bersama teman, bekerja, atau sekadar bersantai.',
            'cafe_category' => 'Teamwork'
        ]);
        
    } 
}
