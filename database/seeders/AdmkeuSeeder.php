<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmkeuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admkeu = 
        [
            [
                'id_admkeu' => 'ADK001',
                'user' => 'USR003'
            ],
        ];

        DB::table('adm_keuangan')->insert($admkeu);
    }
}
