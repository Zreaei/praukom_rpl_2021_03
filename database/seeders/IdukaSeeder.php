<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdukaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iduka = 
        [
            [
                'id_iduka' => 'IDK001',
                'nama_iduka' => 'IDUKA',
                'pimpinan_iduka' => 'CEO IDUKA',
                'alamat_iduka' => 'alamat iduka',
                'telp_iduka' => '123456789'
            ],
        ];

        DB::table('iduka')->insert($iduka);
    }
}
