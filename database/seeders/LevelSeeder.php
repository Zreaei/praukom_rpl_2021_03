<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'nama_level' => 'Admin',
            ],
            [
                'id_level' => 'LVL002',
                'nama_level' => 'Operator',
                ],
                [
                    'id_level' => 'LVL003',
                    'nama_level' => 'Siswa',
                    ],
                    [
                        'id_level' => 'LVL004',
                        'nama_level' => 'Pembimbing Sekolah',
                        ],
                        [
                            'id_level' => 'LVL005',
                            'nama_level' => 'Pembimbing IDUKA',
                            ],
                            [
                                'id_level' => 'LVL006',
                                'nama_level' => 'Wali Kelas',
                                ],
                                [
                                    'id_level' => 'LVL007',
                                    'nama_level' => 'Admin Keuangan',
                                    ],
                                    [
                                        'id_level' => 'LVL008',
                                        'nama_level' => 'Waka Hubin',
                                        ],
                                        [
                                            'id_level' => 'LVL009',
                                            'nama_level' => 'Kaprog',
                                            ],
                                            [
                                                'id_level' => 'LVL010',
                                                'nama_level' => 'Verifikator',
                                                ],
                                            ];

                                            DB::table('level_user')->insert($level);
                                            // $levelUser->each(fn ($lu) => LevelModel::create($lu));
    }
}
