<?php

namespace Database\Seeders;

<<<<<<< HEAD
// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

>>>>>>> e01679e195840334664fe728166a85886559141a
class KategorinilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $kategorinilai = [
        [
            'id_kat_nilai' => 'KTN001',
            'jurusan' => 'JRS001',
            'nama_nilai' => 'Disiplin Waktu',
            'nama_kategori' => 'Sikap Mental',
            ],
            [
                'id_kat_nilai' => 'KTN002',
                'jurusan' => 'JRS001',
                'nama_nilai' => 'Kemauan Kerja dan Motifasi',
                'nama_kategori' => 'Sikap Mental',
                ],
                [
                    'id_kat_nilai' => 'KTN003',
                    'jurusan' => 'JRS001',
                    'nama_nilai' => 'Kualitas Kerja',
                    'nama_kategori' => 'Sikap Mental',
                    ],
                    [
                        'id_kat_nilai' => 'KTN004',
                        'jurusan' => 'JRS001',
                        'nama_nilai' => 'Inisiatif Kerja',
                        'nama_kategori' => 'Sikap Mental',
                        ],
                        [
                            'id_kat_nilai' => 'KTN005',
                            'jurusan' => 'JRS001',
                            'nama_nilai' => 'Perilaku',
                            'nama_kategori' => 'Sikap Mental',
                            ],
                            [
                                'id_kat_nilai' => 'KTN006',
                                'jurusan' => 'JRS001',
                                'nama_nilai' => 'Dasar Desain Grafik',
                                'nama_kategori' => 'Kompetensi Dasar',
                                ],
                                [
                                    'id_kat_nilai' => 'KTN007',
                                    'jurusan' => 'JRS001',
                                    'nama_nilai' => 'Basis Data',
                                    'nama_kategori' => 'Kompetensi Dasar',
                                    ],
                                    [
                                        'id_kat_nilai' => 'KTN008',
                                        'jurusan' => 'JRS001',
                                        'nama_nilai' => 'Pemrograman Web dan Perangkat Bergerak',
                                        'nama_kategori' => 'Kompetensi Dasar',
                                        ],
                                        [
                                            'id_kat_nilai' => 'KTN009',
                                            'jurusan' => 'JRS001',
                                            'nama_nilai' => 'Produk Kreatif dan Kewirausahaan',
                                            'nama_kategori' => 'Kompetensi Dasar',
                                            ],
            ];

                DB::table('kategori_nilai')->insert($kategorinilai);
                                            
    }
}
=======
        $kategori_nilai = 
        [
            [
                'id_kat_nilai' => 'KTN001',
                'jurusan' => 'JRS001',
                'nama_nilai' => 'Disiplin Waktu',
                'nama_kategori' => 'Sikap Mental'
            ],[
                'id_kat_nilai' => 'KTN002',
                'jurusan' => 'JRS001',
                'nama_nilai' => 'Dasar Desain Grafis',
                'nama_kategori' => 'Kompetensi Teknis'
            ],
        ];

        DB::table('kategori_nilai')->insert($kategori_nilai);
    }
}
>>>>>>> e01679e195840334664fe728166a85886559141a
