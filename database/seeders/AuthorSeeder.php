<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye', 'photo' => 'tereliye.jpg', 'bio' => 'Penulis novel populer asal Indonesia.'],
            ['name' => 'Andrea Hirata', 'photo' => 'andrea.jpg', 'bio' => 'Penulis novel Laskar Pelangi.'],
            ['name' => 'Raditya Dika', 'photo' => 'raditya.jpg', 'bio' => 'Komedian dan penulis buku jenaka.'],
            ['name' => 'J.K. Rowling', 'photo' => 'jkrowling.jpg', 'bio' => 'Penulis seri terkenal Harry Potter.'],
            ['name' => 'Pramoedya Ananta Toer', 'photo' => 'pramoedya.jpg', 'bio' => 'Sastrawan legendaris Indonesia.']
        ]);
    }
}