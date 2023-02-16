<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = 
        [
            [
                'id_admin' => 'ADM001',
                'user' => 'USR001',
            ],
        ];

        DB::table('admin')->insert($admin);
    }
}
