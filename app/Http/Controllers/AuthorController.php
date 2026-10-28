<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel authors di database
        $authors = Author::all();
        return view('author.index', compact('authors'));
    }
}