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
                'level' => 'LVL003',
                'username' => 'Siswa',
                'password' => 'siswa',
                'email' => 'siswa@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR004',
                'level' => 'LVL004',
                'username' => 'Pbsekolah',
                'password' => 'pbsekolah',
                'email' => 'pbsekolah@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR005',
                'level' => 'LVL005',
                'username' => 'Pbiduka',
                'password' => 'pbiduka',
                'email' => 'pbiduka@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR006',
                'level' => 'LVL006',
                'username' => 'Walas',
                'password' => 'walas',
                'email' => 'walas@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR007',
                'level' => 'LVL007',
                'username' => 'Admkeu',
                'password' => 'admkeu',
                'email' => 'admkeu@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR008',
                'level' => 'LVL008',
                'username' => 'Wakahubin',
                'password' => 'wakahubin',
                'email' => 'wakahubin@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR009',
                'level' => 'LVL009',
                'username' => 'Kaprog',
                'password' => 'kaprog',
                'email' => 'kaprog@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR010',
                'level' => 'LVL010',
                'username' => 'Verifikator',
                'password' => 'verifikator',
                'email' => 'verifikator@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR011',
                'level' => 'LVL006',
                'username' => 'Walas B',
                'password' => 'walasb',
                'email' => 'walasb@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR012',
                'level' => 'LVL006',
                'username' => 'Walas C',
                'password' => 'walasc',
                'email' => 'walasc@gmail.com',
                'foto_user' => NULL,
            ]
        ];

        DB::table('user')->insert($user);
    }
}
