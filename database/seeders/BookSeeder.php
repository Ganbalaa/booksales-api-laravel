<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Bumi', 'description' => 'Novel fantasi petualangan remaja.', 'price' => 85000, 'stock' => 10, 'cover_photo' => 'bumi.jpg', 'genre_id' => 1, 'author_id' => 1],
            ['title' => 'Laskar Pelangi', 'description' => 'Kisah inspiratif anak-anak Belitong.', 'price' => 75000, 'stock' => 15, 'cover_photo' => 'laskar.jpg', 'genre_id' => 2, 'author_id' => 2],
            ['title' => 'Marmut Merah Jambu', 'description' => 'Kumpulan cerita pendek komedi.', 'price' => 60000, 'stock' => 20, 'cover_photo' => 'marmut.jpg', 'genre_id' => 3, 'author_id' => 3],
            ['title' => 'Harry Potter 1', 'description' => 'Awal mula kisah sihir Harry Potter.', 'price' => 150000, 'stock' => 5, 'cover_photo' => 'hp1.jpg', 'genre_id' => 1, 'author_id' => 4],
            ['title' => 'Bumi Manusia', 'description' => 'Buku sastra berlatar sejarah kolonial.', 'price' => 120000, 'stock' => 8, 'cover_photo' => 'bumimanusia.jpg', 'genre_id' => 4, 'author_id' => 5],
        ]);
    }
}