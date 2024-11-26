@extends('layouts.app')

@section('content')
<style>
    /* General Styles */
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.8s ease;
}

.form-title {
    font-size: 1.8rem;
    font-weight: bold;
    color: #2d3748;
    text-align: center;
    margin-bottom: 20px;
}

.error-box {
    background-color: #ffe6e6;
    color: #d9534f;
    padding: 10px 15px;
    border-radius: 5px;
    margin-bottom: 20px;
    border: 1px solid #d9534f;
}

.error-box ul {
    margin: 0;
    padding-left: 20px;
}

.form-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-label {
    font-size: 0.9rem;
    font-weight: bold;
    color: #555;
    margin-bottom: 5px;
}

.form-input {
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: all 0.3s;
}

.form-input:focus {
    outline: none;
    border-color: #3182ce;
    box-shadow: 0 0 5px rgba(49, 130, 206, 0.5);
}

.form-button {
    padding: 12px;
    font-size: 1rem;
    font-weight: bold;
    color: white;
    background: linear-gradient(to right, #4299e1, #3182ce);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: transform 0.3s, background 0.3s;
}

.form-button:hover {
    transform: scale(1.05);
    background: linear-gradient(to right, #3182ce, #2b6cb0);
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
<div class="container">
    <h1 class="form-title" data-aos="fade-down">Edit Suplier</h1>

    <!-- Error Message -->
    @if ($errors->any())
        <div class="error-box" data-aos="fade-up">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Form -->
    <form action="{{ route('suplier.update', $suplier->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- ID Supplier (Read-Only) -->
        <div class="form-group">
            <label for="id_suplier">ID Supplier</label>
            <input id="id_suplier" name="id_suplier" type="text" value="{{ old('id_suplier', $suplier->id_supplier) }}" readonly />
        </div>

        <!-- Name -->
        <div class="form-group">
            <label for="nama_suplier">Name</label>
            <input id="nama_suplier" name="nama_suplier" type="text" value="{{ old('nama_suplier', $suplier->nama_supplier) }}" />
        </div>

        <!-- Address -->
        <div class="form-group">
            <label for="alamat_suplier">Address</label>
            <textarea id="alamat_suplier" name="alamat_suplier" rows="3">{{ old('alamat_suplier', $suplier->alamat_supplier) }}</textarea>
        </div>

        <!-- Phone Number -->
        <div class="form-group">
            <label for="telepon_suplier">Phone Number</label>
            <input id="telepon_suplier" name="telepon_suplier" type="text" value="{{ old('telepon_suplier', $suplier->telepon_supplier) }}" />
        </div>

        <!-- Action Buttons -->
        <div class="form-group">
            <button type="submit" class="form-button" data-aos="zoom-in">Perbarui</button>
        </div>
    </form>
</div>
@endsection
