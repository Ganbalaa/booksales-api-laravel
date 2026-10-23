<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController; // Mengimpor GenreController
use App\Http\Controllers\AuthorController; // Mengimpor AuthorController

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan daftar Genre
Route::get('/genres', [GenreController::class, 'index']);

// Route untuk menampilkan daftar Author
Route::get('/authors', [AuthorController::class, 'index']);