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

        <form action="{{ route('suplier.store') }}" method="POST">
            @csrf

            <!-- ID Supplier -->
            <div class="form-group">
                <label for="id_supplier">ID Supplier</label>
                <input id="id_supplier" name="id_supplier" type="text" value="{{ old('id_supplier') }}" required />
            </div>

            <!-- Name -->
            <div class="form-group">
                <label for="nama_supplier">Name</label>
                <input id="nama_supplier" name="nama_supplier" type="text" value="{{ old('nama_supplier') }}" required />
            </div>

            <!-- Address -->
            <div class="form-group">
                <label for="alamat_supplier">Address</label>
                <textarea id="alamat_supplier" name="alamat_supplier" rows="3" required>{{ old('alamat_supplier') }}</textarea>
            </div>

            <!-- Phone Number -->
            <div class="form-group">
                <label for="telepon_supplier">Phone Number</label>
                <input id="telepon_supplier" name="telepon_supplier" type="text" value="{{ old('telepon_supplier') }}" required />
            </div>


            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="submit-button" data-aos="zoom-in">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
