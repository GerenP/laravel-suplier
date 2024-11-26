<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan semua data user
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    // Menampilkan form untuk menambahkan user
    public function create()
    {
        return view('user.create');
    }

    // Menyimpan data user ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'nullable|string',
            'password' => 'nullable|string|max:15',
            'level' => 'nullable|string|max:255',
        ]);

        User::create($validated);

        return redirect()->route('user.index')->with('success', 'user berhasil ditambahkan.');
    }

    // Menghapus data user dari database
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'user berhasil dihapus.');
    }

    // Menampilkan form untuk mengedit user
    public function edit($id)
    {
        $user = User::find($id);

        // Memeriksa apakah data user ditemukan
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'user tidak ditemukan.');
        }
        return view('user.edit', compact('user'));
    }

    // Memperbarui data user di database
    public function update(User $user, Request $request)
    {
        // Validasi data request
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'nullable|string',
            'password' => 'nullable|string|max:15',
            'level' => 'nullable|string|max:255',
        ]);

        // Update data user
        $user->update($validatedData);

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui.');
    }
}
