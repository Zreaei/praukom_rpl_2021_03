<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =
        [
            [
                'id_user' => 'USR001',
                'level' => 'LVL001',
                'username' => 'Admin',
                'password' => 'admin',
                'email' => 'admin@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR002',
                'level' => 'LVL002',
                'username' => 'Operator',
                'password' => 'operator',
                'email' => 'operator@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR003',
                'level' => 'LVL007',
                'username' => 'Admkeu',
                'password' => 'admkeu',
                'email' => 'admkeu@gmail.com',
                'foto_user' => NULL,    
            ]
        ];

        DB::table('user')->insert($user);
    }
}
