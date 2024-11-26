<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        DB::table('supplier')->insert([
            [
                'id_supplier' => '1',
                'nama_supplier' => 'Garren si petani',
                'alamat_supplier' => ' Jl. Lingkar Luar Kamal Raya (Outer Ring Road) Perumahan Cinta Kasih Tzu Chi Cengkareng Timur - Cengkareng, Jakarta Barat 11730',
                'telepon_supplier' => '082116341828',
            ],
            [
                'id_supplier' => '2',
                'nama_supplier' => 'Garren si tekstol',
                'alamat_supplier' => ' Jl. Lingkar Luar Kamal Raya (Outer Ring Road) Perumahan Cinta Kasih Tzu Chi Cengkareng Timur - Cengkareng, Jakarta Barat 11730',
                'telepon_supplier' => '082116341828',
            ],
        ]);
    }
}
