<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

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
            'password' => 'admin',
            'email' => 'admin@gmail.com',
            'foto_user' => 'admin.jpeg'
            ],
            [
            'id_user' => 'USR002',
            'level' => 'LVL002',
            'username' => 'operator',
            'password' => 'operator',
            'email' => 'operator@gmail.com',
            'foto_user' => 'operator.jpeg'
            ],
            [
            'id_user' => 'USR003',
            'level' => 'LVL003',
            'username' => 'siswa',
            'password' => 'siswa',
            'email' => 'siswa@gmail.com',
            'foto_user' => 'siswa.jpeg'
            ],
            [
                'id_user' => 'USR004',
                'level' => 'LVL004',
                'username' => 'pbsekolah',
                'password' => 'pbsekolah',
                'email' => 'pbsekolah@gmail.com',
                'foto_user' => 'pbsekolah.jpeg'
                ],
                [
                    'id_user' => 'USR005',
                    'level' => 'LVL005',
                    'username' => 'pbiduka',
                    'password' => 'pbiduka',
                    'email' => 'pbiduka@gmail.com',
                    'foto_user' => 'pbiduka.jpeg'
                    ],
                    [
                        'id_user' => 'USR006',
                        'level' => 'LVL006',
                        'username' => 'walas',
                        'password' => 'walas',
                        'email' => 'walas@gmail.com',
                        'foto_user' => 'walas.jpeg'
                        ],
                        [
                            'id_user' => 'USR007',
                            'level' => 'LVL007',
                            'username' => 'admkeu',
                            'password' => 'admkeu',
                            'email' => 'admkeu@gmail.com',
                            'foto_user' => 'admkeu.jpeg'
                            ],
                            [
                                'id_user' => 'USR008',
                                'level' => 'LVL008',
                                'username' => 'wkhubin',
                                'password' => 'wkhubin',
                                'email' => 'wkhubin@gmail.com',
                                'foto_user' => 'wkhubin.jpeg'
                                ],
                                [
                                    'id_user' => 'USR009',
                                    'level' => 'LVL009',
                                    'username' => 'kaprog',
                                    'password' => 'kaprog',
                                    'email' => 'kaprog@gmail.com',
                                    'foto_user' => 'kaprog.jpeg'
                                    ],
                                    [
                                        'id_user' => 'USR010',
                                        'level' => 'LVL010',
                                        'username' => 'verifikator',
                                        'password' => 'verifikator',
                                        'email' => 'verifikator@gmail.com',
                                        'foto_user' => 'verifikator.jpeg'
                                        ],
        ];

    DB::table('user')->insert($user);
    }
}
