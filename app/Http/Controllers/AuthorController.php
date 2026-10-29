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
        // Mengubah output dari view menjadi format JSON
        return response()->json($authors);
    }
    public function store(Request $request)
    {
        $author = Author::create($request->all());
        
        return response()->json([
            'message' => 'Data Author berhasil ditambahkan!',
            'data' => $author
        ], 201); 
    }
}
