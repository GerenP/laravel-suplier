<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang'; // Nama tabel
    protected $primaryKey = 'id_barang'; // Kolom primary key

    // Jika primary key bukan auto-increment, tambahkan:
    public $incrementing = false;

    // Jika primary key bukan integer, tambahkan:
    protected $keyType = 'string';

    protected $fillable = [
        'id_barang',
        'nama_barang',
        'spesifikasi',
        'lokasi',
        'jumlah_barang',
        'sumber_dana',
    ];
}
