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
        $user = [
        [
            'id_user' => 'USR001',
            'level' => 'LVL001',
            'username' => 'Admin',
            'password' => 'Admin1',
            'email' => 'Admin@1',
            'foto_user' => 'Admin',

            ],
            [
                'id_user' => 'USR002',
<<<<<<< HEAD
                'level' => 'LVL003',
                'username' => 'Siswa',
                'password' => 'Siswa1',
                'email' => 'Siswa@1',
                'foto_user' => 'siswa',

                ],
                [
                    'id_user' => 'USR003',
                    'level' => 'LVL006',
                    'username' => 'Wali Kelas',
                    'password' => 'Wali Kelas1',
                    'email' => 'Wali Kelas@1',
                    'foto_user' => 'Wali Kelas',
                    ],
                    [
                        'id_user' => 'USR004',
                        'level' => 'LVL007',
                        'username' => 'Admin Keuangan',
                        'password' => 'Admin Keuangan1',
                        'email' => 'Admin Keuangan@1',
                        'foto_user' => 'Admin Keuangan',
                        ],
                        [
                            'id_user' => 'USR005',
                            'level' => 'LVL008',
                            'username' => 'Waka Hubin',
                            'password' => 'Waka Hubin1',
                            'email' => 'Waka Hubin@1',
                            'foto_user' => 'Waka Hubin',
                                
                            ],
                            [
                                'id_user' => 'USR006',
                                'level' => 'LVL009',
                                'username' => 'Kaprog',
                                'password' => 'Kaprog1',
                                'email' => 'Kaprog@1',
                                'foto_user' => 'Kaprog',
                                ],
                                [
                                    'id_user' => 'USR007',
                                    'level' => 'LVL002',
                                    'username' => 'Operator',
                                    'password' => 'Operator1',
                                    'email' => 'Operator@1',
                                    'foto_user' => 'Operator',
                                    ],
                                    [
                                        'id_user' => 'USR008',
                                        'level' => 'LVL004',
                                        'username' => 'pbsekolah',
                                        'password' => 'pbsekolah1',
                                        'email' => 'pbsekolah@1',
                                        'foto_user' => 'pbsekolah',
                                        ],
                                        ];
=======
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
>>>>>>> e01679e195840334664fe728166a85886559141a

        DB::table('user')->insert($user);
    }
}
