<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author; // Mengimpor Model Author

class AuthorController extends Controller
{
    public function index()
    {
        // Mengambil data array dari Model
        $authors = Author::getAllAuthors();
        
        // Mengarahkan ke file view (author/index.blade.php) dan membawa data $authors
        return view('author.index', compact('authors'));
    }
}