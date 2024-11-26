<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_Keluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluar';

    // Specify the primary key
    protected $primaryKey = 'id_barang';

    // Specify the fillable fields
    protected $fillable = [
        'id_barang',
        'nama_barang',
        'jml_masuk',
        'jml_keluar',
        'total_barang',
    ];

    public $timestamps = false; // Disable timestamps if the table does not use created_at and updated_at

    // If 'id_barang' is not auto-incrementing
    public $incrementing = false;

    // If 'id_barang' is not an integer
    protected $keyType = 'string';
}
