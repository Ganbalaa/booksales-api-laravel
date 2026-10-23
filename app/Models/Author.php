<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public static function getAllAuthors()
    {
        return [
            [
                'id' => 1,
                'name' => 'Tere Liye',
                'photo' => 'tereliye.jpg',
                'bio' => 'Penulis novel populer asal Indonesia yang dikenal dengan seri Bumi.'
            ],
            [
                'id' => 2,
                'name' => 'Andrea Hirata',
                'photo' => 'andreahirata.jpg',
                'bio' => 'Penulis novel Laskar Pelangi yang karyanya sangat menginspirasi banyak orang.'
            ],
            [
                'id' => 3,
                'name' => 'Raditya Dika',
                'photo' => 'radityadika.jpg',
                'bio' => 'Komedian, sutradara, sekaligus penulis buku bergenre komedi personal.'
            ],
            [
                'id' => 4,
                'name' => 'J.K. Rowling',
                'photo' => 'jkrowling.jpg',
                'bio' => 'Penulis asal Inggris yang sangat terkenal karena karya monumentalnya, seri Harry Potter.'
            ],
            [
                'id' => 5,
                'name' => 'Pramoedya Ananta Toer',
                'photo' => 'pramoedya.jpg',
                'bio' => 'Salah satu sastrawan legendaris Indonesia dengan karyanya yang paling terkenal, Tetralogi Buru.'
            ]
        ];
    }
}