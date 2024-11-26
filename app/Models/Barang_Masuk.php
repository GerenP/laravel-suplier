<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_Masuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuk';

    // Specify the primary key
    protected $primaryKey = 'id_barang';

    // Specify the fillable fields
    protected $fillable = [
        'id_barang',
        'nama_barang',
        'tgl_masuk',
        'jml_barang',
        'id_suplier',
    ];

    public $timestamps = false; // Nonaktifkan timestamps jika tabel tidak menggunakan created_at dan updated_at

    // If 'id_barang' is not auto-incrementing
    public $incrementing = false;

    // If 'id_barang' is not an integer
    protected $keyType = 'string';
}
