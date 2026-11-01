<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// 1. ROUTE PUBLIC (Bisa diakses semua orang)
// Menggunakan ->only() agar yang terbuka hanya fitur Read All (index) dan Show
Route::apiResource('genres', GenreController::class)->only(['index', 'show']);
Route::apiResource('authors', AuthorController::class)->only(['index', 'show']);
Route::get('/books', [BookController::class, 'index']); // Book tetap public


// 2. ROUTE PROTECTED (Hanya untuk Admin / yang sudah login)
// Dibungkus dengan middleware 'auth:sanctum'
Route::middleware('auth:sanctum')->group(function () {
    // Menggunakan ->except() untuk mengunci sisanya (store/create, update, destroy)
    Route::apiResource('genres', GenreController::class)->except(['index', 'show']);
    Route::apiResource('authors', AuthorController::class)->except(['index', 'show']);
});