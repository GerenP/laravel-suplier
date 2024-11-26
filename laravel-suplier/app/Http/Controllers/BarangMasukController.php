<?php

namespace App\Http\Controllers;

use App\Models\Barang_Masuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    // Menampilkan semua data barang
    public function index()
    {
        $barangmasuks = Barang_Masuk::all();
        return view('barangmasuk.index', compact('barangmasuks'));
    }

    // Menampilkan form untuk menambahkan barang
    public function create()
    {
        return view('barangmasuk.create');
    }

    // Menyimpan data barang ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_barang' => 'required|integer|unique:barangmasuk,id_barang',
            'nama_barang' => 'required|string|max:255',
            'tgl_masuk' => 'required|date',
            'jml_barang' => 'required|integer',
            'id_suplier' => 'required|integer',
        ]);
    
        Barang_Masuk::create($validated);
    
        return redirect()->route('barangmasuk.index')->with('success', 'Barang berhasil ditambahkan.');
    }
    
    // Menghapus data barang dari database
    public function destroy(Barang_Masuk $barangmasuk)
    {
        $barangmasuk->delete();

        return redirect()->route('barangmasuk.index')->with('success', 'Barang berhasil dihapus.');
    }

    // Menampilkan form untuk mengedit barang
    public function edit($id_barang)
    {
        $barangmasuk = Barang_Masuk::find($id_barang);

        // Memeriksa apakah data barang ditemukan
        if (!$barangmasuk) {
            return redirect()->route('barangmasuk.index')->with('error', 'Barang tidak ditemukan.');
        }

        return view('barangmasuk.edit', compact('barangmasuk'));
    }

    // Memperbarui data barang di database
    public function update(Request $request, $id_barang)
    {
        $barangmasuk = Barang_Masuk::find($id_barang);

        if (!$barangmasuk) {
            return redirect()->route('barangmasuk.index')->with('error', 'Barang tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'tgl_masuk' => 'required|date',
            'jml_barang' => 'required|integer',
            'id_suplier' => 'required|integer',
        ]);

        $barangmasuk->update($validatedData);

        return redirect()->route('barangmasuk.index')->with('success', 'Data barang berhasil diperbarui.');
    }
}
