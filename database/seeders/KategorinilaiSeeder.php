<?php

namespace Database\Seeders;

// use App\Models\LevelModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class KategorinilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
