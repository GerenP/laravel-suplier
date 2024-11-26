<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop ASUS ROG',
                'spesifikasi' => 'Intel i7, 16GB RAM, SSD 512GB',
                'lokasi' => 'Lab Komputer',
                'jumlah_barang' => '10',
                'sumber_dana' => 'APBN',
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Proyektor Epson',
                'spesifikasi' => '1080p, 4000 lumens',
                'lokasi' => 'Ruang Presentasi',
                'jumlah_barang' => '5',
                'sumber_dana' => 'Dana BOS',
            ],
            [
                'id_barang' => 3,
                'nama_barang' => 'Printer Canon',
                'spesifikasi' => 'Inkjet, WiFi, A3',
                'lokasi' => 'Admin Office',
                'jumlah_barang' => '3',
                'sumber_dana' => 'Hibah',
            ],
        ]);
    }
}
