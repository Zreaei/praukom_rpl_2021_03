<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


=======
// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;
>>>>>>> 7be6b6171398e8469cc955736142442135385b55

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
<<<<<<< HEAD
        [
            'id_user' => 'USR001',
            'level' => 'LVL003',
            'username' => 'Siswa',
            'password' => 'Siswa1',
            'email' => 'Siswa@1',
            'foto_user' => 'siswa',

            ],
            [
                'id_user' => 'USR002',
                'level' => 'LVL006',
                'username' => 'Wali Kelas',
                'password' => 'Wali Kelas1',
                'email' => 'Wali Kelas@1',
                'foto_user' => 'Wali Kelas',
                ],
                [
                    'id_user' => 'USR003',
                    'level' => 'LVL007',
                    'username' => 'Admin Keuangan',
                    'password' => 'Admin Keuangan1',
                    'email' => 'Admin Keuangan@1',
                    'foto_user' => 'Admin Keuangan',
                    ],
                    [
                        'id_user' => 'USR004',
                        'level' => 'LVL008',
                        'username' => 'Waka Hubin',
                        'password' => 'Waka Hubin1',
                        'email' => 'Waka Hubin@1',
                        'foto_user' => 'Waka Hubin',
                            
                        ],
                        [
                            'id_user' => 'USR005',
                            'level' => 'LVL009',
                            'username' => 'Kaprog',
                            'password' => 'Kaprog1',
                            'email' => 'Kaprog@1',
                            'foto_user' => 'Kaprog',
                            ],
                            ];

                        DB::table('user')->insert($user);
                                            
=======
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
>>>>>>> 7be6b6171398e8469cc955736142442135385b55
    }
}
