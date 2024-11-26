<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stok;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            [
                'id_barang' => '001',
                'nama_barang' => 'Laptop',
                'jml_masuk' => 30,
                'jml_keluar' => 5,
                'total_barang' => 25,
            ],
            [
                'id_barang' => '002',
                'nama_barang' => 'Proyektor',
                'jml_masuk' => 20,
                'jml_keluar' => 3,
                'total_barang' => 17,
            ],
            [
                'id_barang' => '003',
                'nama_barang' => 'Kursi Kantor',
                'jml_masuk' => 50,
                'jml_keluar' => 10,
                'total_barang' => 40,
            ],
            [
                'id_barang' => '004',
                'nama_barang' => 'Meja Kantor',
                'jml_masuk' => 25,
                'jml_keluar' => 5,
                'total_barang' => 20,
            ],
        ];

        foreach ($data as $item) {
            Stok::create($item);
        }
    }
}
