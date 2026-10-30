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
    public function show($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Data Author tidak ditemukan!'], 404);
        }
        return response()->json($author);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Data Author tidak ditemukan!'], 404);
        }
        
        $author->update($request->all());
        return response()->json([
            'message' => 'Data Author berhasil diubah!',
            'data' => $author
        ]);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Data Author tidak ditemukan!'], 404);
        }
        
        $author->delete();
        return response()->json(['message' => 'Data Author berhasil dihapus!']);
    }
}
