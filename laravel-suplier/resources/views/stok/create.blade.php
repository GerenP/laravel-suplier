@extends('layouts.app')

@section('content')
<style>
    /* Container Setup */
.form-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    box-sizing: border-box;
}

/* Form Wrapper */
.form-wrapper {
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    width: 100%;
    max-width: 500px;
    animation: fadeIn 1s ease;
}

/* Title */
.form-title {
    font-size: 1.8rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 1.5rem;
    color: #1e3a8a;
}

/* Error Message */
.error-box {
    background-color: #ffe4e6;
    border: 1px solid #f43f5e;
    color: #b91c1c;
    border-radius: 4px;
    padding: 1rem;
    margin-bottom: 1rem;
    font-size: 0.9rem;
}

/* Form Elements */
.form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 0.95rem;
    color: #334155;
    margin-bottom: 0.5rem;
}

.form-group input,
.form-group textarea {
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 4px;
    font-size: 1rem;
    background-color: #f9fafb;
    transition: border-color 0.2s, background-color 0.2s;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #60a5fa;
    background-color: #ffffff;
    outline: none;
}

/* Button */
.submit-button {
    background: linear-gradient(to right, #2563eb, #1d4ed8);
    color: #ffffff;
    padding: 0.75rem;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

.submit-button:hover {
    background: linear-gradient(to right, #1d4ed8, #1e40af);
    transform: scale(1.05);
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
<div class="form-container">
    <div class="form-wrapper" data-aos="fade-up">
        <h1 class="form-title">Tambah stok</h1>

        @if ($errors->any())
            <div class="error-box" data-aos="fade-down">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('stok.store') }}" method="POST" class="form">
            @csrf

            <!-- ID stok -->
            <div class="form-group">
                <label for="id_stok">ID Stok</label>
                <input type="number" id="id_stok" name="id_stok" required>
            </div>

            <!-- Nama stok] -->
            <div class="form-group">
                <label for="nama_stok]">Nama Stok</label>
                <input type="text" id="nama_stok" name="nama_stok" required>
            </div>

            <!-- Spesifikasi -->
            <div class="form-group">
                <label for="jml_masuk">Jumlah Masuk</label>
                <textarea id="jml_masuk" name="jml_masuk" rows="4"></textarea>
            </div>

            <!-- Lokasi -->
            <div class="form-group">
                <label for="jml_keluar">Jumlah Keluar</label>
                <textarea id="jml_keluar" name="jml_keluar" rows="4"></textarea>
            </div>

            <!-- Jumlah stok -->
            <div class="form-group">
                <label for="total_barang">Total Barang</label>
                <input type="text" id="total_barang" name="total_barang" required>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="submit-button" data-aos="zoom-in">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
