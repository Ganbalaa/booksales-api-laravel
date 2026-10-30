<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre; // Mengimpor Model Genre

class GenreController extends Controller
{
    // Fitur Read All Data
    public function index()
    {
        // Mengambil data dari database
        $genres = Genre::all();
        
        // Mengarahkan output menjadi JSON
        return response()->json($genres);
    }

    // Fitur Create Data Baru
    public function store(Request $request)
    {
        // Menyimpan data ke database
        $genre = Genre::create($request->all());
        
        return response()->json([
            'message' => 'Data Genre berhasil ditambahkan!',
            'data' => $genre
        ], 201); // 201 adalah status code HTTP untuk Created
    }
    // Fitur Show (Melihat 1 Data spesifik)
    public function show($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json(['message' => 'Data Genre tidak ditemukan!'], 404);
        }
        return response()->json($genre);
    }

    // Fitur Update (Mengubah Data)
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json(['message' => 'Data Genre tidak ditemukan!'], 404);
        }
        
        $genre->update($request->all());
        return response()->json([
            'message' => 'Data Genre berhasil diubah!',
            'data' => $genre
        ]);
    }

    // Fitur Destroy (Menghapus Data)
    public function destroy($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json(['message' => 'Data Genre tidak ditemukan!'], 404);
        }
        
        $genre->delete();
        return response()->json(['message' => 'Data Genre berhasil dihapus!']);
    }
}