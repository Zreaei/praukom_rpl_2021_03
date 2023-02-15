<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operator = 
        [
            [
                'id_operator' => 'OPR001',
                'user' => 'USR002',
            ],
        ];

        DB::table('operator')->insert($operator);
    }
}
