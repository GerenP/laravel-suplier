<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam_Barang extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'pinjam_barang';

    // Specify the primary key of the table
    protected $primaryKey = 'id_pinjam';

    // Specify the fillable fields
    protected $fillable = [
        'id_pinjam',
        'peminjam',
        'tgl_pinjam',
        'id_barang',
        'nama_barang',
        'jml_barang',
        'tgl_kembali',
        'kondisi',
    ];

    // Disable timestamps if the table does not use `created_at` and `updated_at`
    public $timestamps = false;

    // If 'id_pinjam' is not auto-incrementing
    public $incrementing = false;

    // If 'id_pinjam' is not an integer
    protected $keyType = 'string';
}
