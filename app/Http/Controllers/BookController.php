<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel books di database
        $books = Book::all();
        // Mengubah output dari view menjadi format JSON
        return response()->json($books);
    }
}