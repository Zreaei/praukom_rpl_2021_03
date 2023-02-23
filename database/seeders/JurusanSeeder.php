<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = 
        [
            [
                'id_jurusan' => 'JRS001',
                'kaprog' => 'KPR001',
                'bidang_keahlian' => 'Informatika',
                'program_keahlian' => 'RPL'
            ],
        ];

        DB::table('jurusan')->insert($jurusan);
    }
}
