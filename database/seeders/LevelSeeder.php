<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Str;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin = 'Admin';
        // $operator = 'Operator';
        // $siswa = 'Siswa';
        // $admkeu = 'Admkeu';
        // $kaprog = 'Kaprog';
        // $walas = 'Walas';
        // $wkhubin = 'Wkhubin';
        // $pbsekolah = 'Pbsekolah';
        // $pbiduka = 'Pbiduka';
        // $verifikator = 'Verifikator';

        $level = [
            [
            'id_level' => 'LVL001',
            'nama_level' => 'ADMIN',
            ],
            [
                'id_level' => 'LVL002',
                'nama_level' => 'OPERATOR',
                ],
                [
                    'id_level' => 'LVL003',
                    'nama_level' => 'SISWA',
                    ],
                    [
                        'id_level' => 'LVL004',
                        'nama_level' => 'PEMBIMBING SEKOLAH',
                        ],
                        [
                            'id_level' => 'LVL005',
                            'nama_level' => 'PEMBIMBING IDUKA',
                            ],
                            [
                                'id_level' => 'LVL006',
                                'nama_level' => 'WALI KELAS',
                                ],
                                [
                                    'id_level' => 'LVL007',
                                    'nama_level' => 'ADM KEUANGAN',
                                    ],
                                    [
                                        'id_level' => 'LVL008',
                                        'nama_level' => 'WAKA HUBIN',
                                        ],
                                        [
                                            'id_level' => 'LVL009',
                                            'nama_level' => 'KAPROG',
                                            ],
                                            [
                                                'id_level' => 'LVL010',
                                                'nama_level' => 'VERIFIKATOR',
                                                ],
                                            ];

                                            \DB::table('level_user')->insert($level);
                                            // $levelUser->each(fn ($lu) => LevelModel::create($lu));
    }
}
