<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Menampilkan semua data suplier
    public function index()
    {
        $supliers = supplier::all();
        return view('suplier.index', compact('supliers'));
    }

    // Menampilkan form untuk menambahkan suplier
    public function create()
    {
        return view('suplier.create');
    }

    // Menyimpan data suplier ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_suplier' => 'required|string|max:255',
            'alamat_suplier' => 'nullable|string',
            'telepon_suplier' => 'nullable|string|max:15',
        ]);

        Supplier::create($validated);

        return redirect()->route('suplier.index')->with('success', 'suplier berhasil ditambahkan.');
    }

    // Menghapus data suplier dari database
    public function destroy(Supplier $suplier)
    {
        $suplier->delete();

        return redirect()->route('suplier.index')->with('success', 'suplier berhasil dihapus.');
    }

    // Menampilkan form untuk mengedit suplier
    public function edit($id)
    {
        $suplier = Supplier::find($id);

        // Memeriksa apakah data suplier ditemukan
        if (!$suplier) {
            return redirect()->route('suplier.index')->with('error', 'suplier tidak ditemukan.');
        }
        return view('suplier.edit', compact('suplier'));
    }

    // Memperbarui data suplier di database
    public function update(Supplier $suplier, Request $request)
    {
        // Validasi data request
        $validatedData = $request->validate([
            'nama_suplier' => 'required|string|max:255',
            'alamat_suplier' => 'nullable|string',
            'telepon_suplier' => 'nullable|string|max:15',
        ]);

        // Update data suplier
        $suplier->update($validatedData);

        return redirect()->route('suplier.index')->with('success', 'Data suplier berhasil diperbarui.');
    }
}
