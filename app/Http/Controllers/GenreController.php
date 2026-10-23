<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre; // Mengimpor Model Genre

class GenreController extends Controller
{
    public function index()
    {
        // Mengambil data array dari Model
        $genres = Genre::getAllGenres();
        
        // Mengarahkan ke file view (genre/index.blade.php) dan membawa data $genres
        return view('genre.index', compact('genres'));
    }
}