<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    // Menampilkan semua data stok
    public function index()
    {
        $stoks = Stok::all();
        return view('stok.index', compact('stoks'));
    }

    // Menampilkan form untuk menambahkan stok
    public function create()
    {
        return view('stok.create');
    }

    // Menyimpan data stok ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer',
            'jml_keluar' => 'required|integer',
            'total_barang' => 'required|integer',
        ]);

        Stok::create($validated);

        return redirect()->route('stok.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    // Menghapus data stok dari database
    public function destroy(Stok $stok)
    {
        $stok->delete();

        return redirect()->route('stok.index')->with('success', 'Stok berhasil dihapus.');
    }

    // Menampilkan form untuk mengedit stok
    public function edit($id)
    {
        $stok = Stok::find($id);

        // Memeriksa apakah data stok ditemukan
        if (!$stok) {
            return redirect()->route('stok.index')->with('error', 'stok tidak ditemukan.');
        }
        return view('stok.edit', compact('stok'));
    }

    // Memperbarui data stok di database
    public function update(Stok $stok, Request $request)
    {
        // Validasi data request
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer',
            'jml_keluar' => 'required|integer',
            'total_barang' => 'required|integer',
        ]);

        // Update data stok
        $stok->update($validatedData);

        return redirect()->route('stok.index')->with('success', 'Data stok berhasil diperbarui.');
    }
}
