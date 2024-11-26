<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Menampilkan semua data barang
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    // Menampilkan form untuk menambahkan barang
    public function create()
    {
        return view('barang.create');
    }

    // Menyimpan data barang ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_barang' => 'required|integer|unique:barang,id_barang',
            'nama_barang' => 'required|string|max:255',
            'spesifikasi' => 'nullable|string',
            'lokasi' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'sumber_dana' => 'nullable|string|max:255',
        ]);

        Barang::create($validated);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    // Menghapus data barang dari database
    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }

    // Menampilkan form untuk mengedit barang
    public function edit($id)
    {
        $barang = Barang::find($id);

        // Memeriksa apakah data barang ditemukan
        if (!$barang) {
            return redirect()->route('barang.index')->with('error', 'Barang tidak ditemukan.');
        }
        return view('barang.edit', compact('barang'));
    }

    // Memperbarui data barang di database
    public function update(Barang $barang, Request $request)
    {
        // Validasi data request
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'spesifikasi' => 'nullable|string',
            'lokasi' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'sumber_dana' => 'nullable|string|max:255',
        ]);

        // Update data barang
        $barang->update($validatedData);

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil diperbarui.');
    }
}
