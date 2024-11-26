@extends('layouts.app')

@section('content')
<style>
/* General Styles */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1.5rem;
}

/* Heading Animation */
h1 {
    font-size: 1.75rem;
    font-weight: bold;
    color: #2d3748;
    margin-bottom: 1.5rem;
    animation: fadeDown 0.8s ease-in-out;
}

/* Button Styles */
a.btn-primary {
    display: inline-block;
    background: linear-gradient(to right, #4299e1, #3182ce, #2b6cb0);
    color: white;
    font-weight: 600;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    text-decoration: none;
    transition: transform 0.2s ease, background 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

a.btn-primary:hover {
    background: linear-gradient(to right, #3182ce, #2b6cb0);
    transform: scale(1.05);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
}

/* Table Styles */
table {
    width: 100%;
    background: white;
    border-collapse: collapse;
    margin-top: 1rem;
    border: 1px solid #e2e8f0;
    border-radius: 0.375rem;
    overflow: hidden;
}

thead {
    background: #f7fafc;
}

th, td {
    padding: 0.75rem 1rem;
    text-align: left;
    border-bottom: 1px solid #e2e8f0;
    font-size: 0.875rem;
    color: #4a5568;
}

th {
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.05rem;
}

tr:hover {
    background: #f7fafc;
    transition: background 0.3s ease;
}

/* Action Buttons */
a.action-link, button.action-button {
    color: #d69e2e;
    font-weight: 500;
    text-decoration: none;
    transition: transform 0.2s ease, color 0.3s ease;
}

a.action-link:hover, button.action-button:hover {
    color: #b7791f;
    transform: scale(1.1);
}

button.action-button {
    background: none;
    border: none;
    cursor: pointer;
    margin-left: 0.5rem;
    color: #e53e3e;
    transition: transform 0.2s ease, color 0.3s ease;
}

button.action-button:hover {
    color: #c53030;
    transform: scale(1.1);
}

/* Animations */
@keyframes fadeDown {
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
    <h1>Daftar Peminjaman Barang</h1>
    
    <a href="{{ route('pinjambarang.create') }}" class="btn-primary">
        Pinjam Barang
    </a>

    @if(session('success'))
        <div style="background-color: #f0fff4; border: 1px solid #c6f6d5; color: #38a169; padding: 0.75rem 1rem; border-radius: 0.375rem; margin-bottom: 1rem;">
            {{ session('success') }}
        </div>
    @endif

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>ID Pinjam</th>
                    <th>Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Tanggal Kembali</th>
                    <th>Kondisi</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pinjamBarangs as $pinjambarang)
                    <tr>
                        <td>{{ $pinjambarang->id_pinjam }}</td>
                        <td>{{ $pinjambarang->peminjam }}</td>
                        <td>{{ $pinjambarang->tgl_pinjam }}</td>
                        <td>{{ $pinjambarang->id_barang }}</td>
                        <td>{{ $pinjambarang->nama_barang }}</td>
                        <td>{{ $pinjambarang->jml_barang }}</td>
                        <td>{{ $pinjambarang->tgl_kembali }}</td>
                        <td>{{ $pinjambarang->kondisi }}</td>
                        <td>
                            <a href="{{ route('pinjambarang.edit', $pinjambarang->id_pinjam) }}" class="action-link">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('pinjambarang.destroy', $pinjambarang->id_pinjam) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-button" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" style="text-align: center; color: #718096; padding: 1rem;">Tidak ada data peminjaman barang.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
