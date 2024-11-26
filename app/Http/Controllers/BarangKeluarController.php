<?php

namespace App\Http\Controllers;

use App\Models\Barang_Keluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    // Menampilkan semua data barang
    public function index()
    {
        $barangkeluars = Barang_Keluar::all();
        return view('barangkeluar.index', compact('barangkeluars'));
    }

    // Menampilkan form untuk menambahkan barang
    public function create()
    {
        return view('barangkeluar.create');
    }

    // Menyimpan data barang ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_barang' => 'required|string|unique:barang_keluar,id_barang',
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer',
            'jml_keluar' => 'required|integer',
            'total_barang' => 'required|integer',
        ]);

        Barang_Keluar::create($validated);

        return redirect()->route('barangkeluar.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    // Menghapus data barang dari database
    public function destroy(Barang_Keluar $barangkeluar)
    {
        $barangkeluar->delete();

        return redirect()->route('barangkeluar.index')->with('success', 'Barang berhasil dihapus.');
    }

    // Menampilkan form untuk mengedit barang
    public function edit($id_barang)
    {
        $barangkeluar = Barang_Keluar::find($id_barang);

        // Memeriksa apakah data barang ditemukan
        if (!$barangkeluar) {
            return redirect()->route('barangkeluar.index')->with('error', 'Barang tidak ditemukan.');
        }

        return view('barangkeluar.edit', compact('barangkeluar'));
    }

    // Memperbarui data barang di database
    public function update(Request $request, $id_barang)
    {
        $barangkeluar = Barang_Keluar::find($id_barang);

        if (!$barangkeluar) {
            return redirect()->route('barangkeluar.index')->with('error', 'Barang tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer',
            'jml_keluar' => 'required|integer',
            'total_barang' => 'required|integer',
        ]);

        $barangkeluar->update($validatedData);

        return redirect()->route('barangkeluar.index')->with('success', 'Data barang berhasil diperbarui.');
    }
}
