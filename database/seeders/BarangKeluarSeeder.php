<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang_Keluar;

class BarangKeluarSeeder extends Seeder
{
    public function run()
    {
        Barang_Keluar::insert([
            [
                'id_barang' => '001',
                'nama_barang' => 'Mouse Logitech M185',
                'jml_masuk' => 50,
                'jml_keluar' => 20,
                'total_barang' => 30,
            ],
            [
                'id_barang' => '002',
                'nama_barang' => 'Keyboard Razer K100',
                'jml_masuk' => 40,
                'jml_keluar' => 15,
                'total_barang' => 25,
            ],
            [
                'id_barang' => '003',
                'nama_barang' => 'Monitor LG 24MK600',
                'jml_masuk' => 30,
                'jml_keluar' => 10,
                'total_barang' => 20,
            ],
            [
                'id_barang' => '004',
                'nama_barang' => 'CPU Cooler Hyper 212',
                'jml_masuk' => 20,
                'jml_keluar' => 5,
                'total_barang' => 15,
            ],
            [
                'id_barang' => '005',
                'nama_barang' => 'SSD Samsung 970 EVO',
                'jml_masuk' => 100,
                'jml_keluar' => 60,
                'total_barang' => 40,
            ],
        ]);
    }
}
