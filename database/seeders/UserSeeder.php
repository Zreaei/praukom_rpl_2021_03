<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{DB, Hash};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        [
            'id_user' => 'USR001',
            'level' => 'LVL001',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'admin@gmail.com',
            'foto_user' => NULL,

            ],
            [
                'id_user' => 'USR002',
                'level' => 'LVL002',
                'username' => 'operator',
                'password' => Hash::make('operator'),
                'email' => 'operator@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR003',
                'level' => 'LVL003',
                'username' => 'siswa',
                'password' => Hash::make('siswa'),
                'email' => 'siswa@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR004',
                'level' => 'LVL004',
                'username' => 'pbsekolah',
                'password' => Hash::make('pbsekolah'),
                'email' => 'pbsekolah@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR005',
                'level' => 'LVL005',
                'username' => 'pbiduka',
                'password' => Hash::make('pbiduka'),
                'email' => 'pbiduka@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR006',
                'level' => 'LVL006',
                'username' => 'walas',
                'password' => Hash::make('walas'),
                'email' => 'walas@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR007',
                'level' => 'LVL007',
                'username' => 'admkeu',
                'password' => Hash::make('admkeu'),
                'email' => 'admkeu@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR008',
                'level' => 'LVL008',
                'username' => 'wkhubin',
                'password' => Hash::make('wkhubin'),
                'email' => 'wkhubin@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR009',
                'level' => 'LVL009',
                'username' => 'kaprog',
                'password' => Hash::make('kaprog'),
                'email' => 'kaprog@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR010',
                'level' => 'LVL010',
                'username' => 'verifikator',
                'password' => Hash::make('verifikator'),
                'email' => 'verifikator@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR011',
                'level' => 'LVL006',
                'username' => 'walasb',
                'password' => Hash::make('walasb'),
                'email' => 'walasb@gmail.com',
                'foto_user' => NULL,
            ],
            [
                'id_user' => 'USR012',
                'level' => 'LVL006',
                'username' => 'walasc',
                'password' => Hash::make('walasc'),
                'email' => 'walasc@gmail.com',
                'foto_user' => NULL,
            ]
        ];

        DB::table('user')->insert($user);
    }
}
