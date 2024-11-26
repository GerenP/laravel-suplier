<?php

namespace App\Http\Controllers;

use App\Models\Pinjam_Barang;
use Illuminate\Http\Request;

class PinjamBarangController extends Controller
{
    // Menampilkan semua data pinjaman barang
    public function index()
    {
        $pinjamBarangs = Pinjam_Barang::all();
        return view('pinjambarang.index', compact('pinjamBarangs'));
    }

    // Menampilkan form untuk menambahkan data pinjaman barang
    public function create()
    {
        return view('pinjambarang.create');
    }

    // Menyimpan data pinjaman barang ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pinjam' => 'required|string|unique:barang_masuk,id_pinjam',
            'peminjam' => 'required|string|max:255',
            'tgl_pinjam' => 'required|date',
            'id_barang' => 'required|string',
            'nama_barang' => 'required|string|max:255',
            'jml_barang' => 'required|integer',
            'tgl_kembali' => 'nullable|date',
            'kondisi' => 'required|string|max:255',
        ]);

        Pinjam_Barang::create($validated);

        return redirect()->route('pinjambarang.index')->with('success', 'Data pinjaman berhasil ditambahkan.');
    }

    // Menghapus data pinjaman barang dari database
    public function destroy(Pinjam_Barang $pinjamBarang)
    {
        $pinjamBarang->delete();

        return redirect()->route('pinjambarang.index')->with('success', 'Data pinjaman berhasil dihapus.');
    }

    // Menampilkan form untuk mengedit data pinjaman barang
    public function edit($id_pinjam)
    {
        $pinjamBarang = Pinjam_Barang::find($id_pinjam);

        // Memeriksa apakah data pinjaman ditemukan
        if (!$pinjamBarang) {
            return redirect()->route('pinjambarang.index')->with('error', 'Data pinjaman tidak ditemukan.');
        }

        return view('pinjambarang.edit', compact('pinjamBarang'));
    }

    // Memperbarui data pinjaman barang di database
    public function update(Request $request, $id_pinjam)
    {
        $pinjamBarang = Pinjam_Barang::find($id_pinjam);

        if (!$pinjamBarang) {
            return redirect()->route('pinjambarang.index')->with('error', 'Data pinjaman tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'peminjam' => 'required|string|max:255',
            'tgl_pinjam' => 'required|date',
            'id_barang' => 'required|string',
            'nama_barang' => 'required|string|max:255',
            'jml_barang' => 'required|integer',
            'tgl_kembali' => 'nullable|date',
            'kondisi' => 'required|string|max:255',
        ]);

        $pinjamBarang->update($validatedData);

        return redirect()->route('pinjambarang.index')->with('success', 'Data pinjaman berhasil diperbarui.');
    }
}
