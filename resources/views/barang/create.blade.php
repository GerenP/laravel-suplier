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
        <h1 class="form-title">Tambah Barang</h1>

        @if ($errors->any())
            <div class="error-box" data-aos="fade-down">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('barang.store') }}" method="POST" class="form">
            @csrf

            <!-- ID Barang -->
            <div class="form-group">
                <label for="id_barang">ID Barang</label>
                <input type="number" id="id_barang" name="id_barang" required>
            </div>

            <!-- Nama Barang -->
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" id="nama_barang" name="nama_barang" required>
            </div>

            <!-- Spesifikasi -->
            <div class="form-group">
                <label for="spesifikasi">Spesifikasi</label>
                <textarea id="spesifikasi" name="spesifikasi" rows="4"></textarea>
            </div>

            <!-- Lokasi -->
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" required>
            </div>

            <!-- Jumlah Barang -->
            <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang</label>
                <input type="number" id="jumlah_barang" name="jumlah_barang" required>
            </div>

            <!-- Sumber Dana -->
            <div class="form-group">
                <label for="sumber_dana">Sumber Dana</label>
                <input type="text" id="sumber_dana" name="sumber_dana">
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="submit-button" data-aos="zoom-in">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
