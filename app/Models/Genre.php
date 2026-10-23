<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function getAllGenres()
    {
        return [
            [
                'id' => 1,
                'name' => 'Fiksi',
                'description' => 'Karya sastra yang berisi cerita rekaan atau didasari angan-angan (fantasi) dan bukan berdasarkan kejadian nyata.'
            ],
            [
                'id' => 2,
                'name' => 'Non-Fiksi',
                'description' => 'Tulisan yang berisi informasi faktual dan didasarkan pada fakta atau kenyataan yang sebenarnya.'
            ],
            [
                'id' => 3,
                'name' => 'Misteri',
                'description' => 'Genre yang berfokus pada pemecahan kejahatan atau teka-teki, seringkali melibatkan detektif.'
            ],
            [
                'id' => 4,
                'name' => 'Romantis',
                'description' => 'Cerita yang berfokus pada hubungan asmara antara dua karakter utama dengan alur cerita yang emosional.'
            ],
            [
                'id' => 5,
                'name' => 'Sains & Teknologi',
                'description' => 'Buku yang membahas tentang perkembangan ilmu pengetahuan, pemrograman, dan inovasi teknologi terkini.'
            ]
        ];
    }
}