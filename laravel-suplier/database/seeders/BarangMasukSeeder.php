<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_masuk')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'tgl_masuk' => '2024-11-01',
                'jml_barang' => 10,
                'id_suplier' => 2,
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Printer',
                'tgl_masuk' => '2024-11-05',
                'jml_barang' => 5,
                'id_suplier' => 3,
            ],
            [
                'id_barang' => 3,
                'nama_barang' => 'Monitor',
                'tgl_masuk' => '2024-11-10',
                'jml_barang' => 8,
                'id_suplier' => 1,
            ],
        ]);
    }
}
