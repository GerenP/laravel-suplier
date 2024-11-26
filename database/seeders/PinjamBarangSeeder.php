<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pinjam_Barang;

class PinjamBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_pinjam' => '001',
                'peminjam' => 'John Doe',
                'tgl_pinjam' => '2024-11-01',
                'id_barang' => '001',
                'nama_barang' => 'Laptop Dell XPS 13',
                'jml_barang' => 1,
                'tgl_kembali' => '2024-11-10',
                'kondisi' => 'Baik',
            ],
            [
                'id_pinjam' => '002',
                'peminjam' => 'Jane Smith',
                'tgl_pinjam' => '2024-11-03',
                'id_barang' => '002',
                'nama_barang' => 'Projector Epson X500',
                'jml_barang' => 2,
                'tgl_kembali' => '2024-11-15',
                'kondisi' => 'Rusak',
            ],
            [
                'id_pinjam' => '003',
                'peminjam' => 'Alice Brown',
                'tgl_pinjam' => '2024-11-05',
                'id_barang' => '003',
                'nama_barang' => 'Printer Canon G3010',
                'jml_barang' => 1,
                'tgl_kembali' => '2024-11-12',
                'kondisi' => 'Baik',
            ],
            [
                'id_pinjam' => '004',
                'peminjam' => 'Bob Johnson',
                'tgl_pinjam' => '2024-11-07',
                'id_barang' => '004',
                'nama_barang' => 'Monitor Samsung 24"',
                'jml_barang' => 3,
                'tgl_kembali' => '2024-11-18',
                'kondisi' => 'Baik',
            ],
            [
                'id_pinjam' => '005',
                'peminjam' => 'Charlie Wilson',
                'tgl_pinjam' => '2024-11-10',
                'id_barang' => '005',
                'nama_barang' => 'Keyboard Mechanical Logitech',
                'jml_barang' => 2,
                'tgl_kembali' => '2024-11-20',
                'kondisi' => 'Baik',
            ],
            [
                'id_pinjam' => '006',
                'peminjam' => 'Diana Prince',
                'tgl_pinjam' => '2024-11-12',
                'id_barang' => '006',
                'nama_barang' => 'Headset HyperX Cloud II',
                'jml_barang' => 1,
                'tgl_kembali' => '2024-11-22',
                'kondisi' => 'Rusak',
            ],
            [
                'id_pinjam' => '007',
                'peminjam' => 'Eve Cooper',
                'tgl_pinjam' => '2024-11-15',
                'id_barang' => '007',
                'nama_barang' => 'Mouse Logitech MX Master 3',
                'jml_barang' => 2,
                'tgl_kembali' => '2024-11-25',
                'kondisi' => 'Baik',
            ],
            [
                'id_pinjam' => '008',
                'peminjam' => 'Frank Castle',
                'tgl_pinjam' => '2024-11-17',
                'id_barang' => '008',
                'nama_barang' => 'Tablet iPad Air 2023',
                'jml_barang' => 1,
                'tgl_kembali' => '2024-11-27',
                'kondisi' => 'Baik',
            ],
            [
                'id_pinjam' => '009',
                'peminjam' => 'Grace Lee',
                'tgl_pinjam' => '2024-11-19',
                'id_barang' => '009',
                'nama_barang' => 'Camera Canon EOS M50',
                'jml_barang' => 1,
                'tgl_kembali' => '2024-11-29',
                'kondisi' => 'Baik',
            ],
            [
                'id_pinjam' => '010',
                'peminjam' => 'Hank Pym',
                'tgl_pinjam' => '2024-11-20',
                'id_barang' => '010',
                'nama_barang' => 'Microphone Blue Yeti',
                'jml_barang' => 1,
                'tgl_kembali' => '2024-11-30',
                'kondisi' => 'Baik',
            ],
        ];

        foreach ($data as $item) {
            Pinjam_Barang::create($item);
        }
    }
}
