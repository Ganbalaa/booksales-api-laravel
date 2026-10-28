<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController; // Mengimpor GenreController

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan daftar Genre
Route::get('/genres', [GenreController::class, 'index']);