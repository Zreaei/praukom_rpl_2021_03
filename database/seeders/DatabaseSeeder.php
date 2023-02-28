<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use App\Models\LevelModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $seeders = [
        //     LevelSeeder::class
        // ];
        // $this->call($seeders);

        $this->call([
            LevelSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            OperatorSeeder::class,
            AdmkeuSeeder::class,
            WkhubinSeeder::class,
            PbsekolahSeeder::class,
            PbidukaSeeder::class,
            KaprogSeeder::class,
            WalasSeeder::class,
            VerifikatorSeeder::class,
            IdukaSeeder::class,
            JurusanSeeder::class,
            AngkatanSeeder::class,
            KelasSeeder::class,
            SiswaSeeder::class,
            PengajuanSeeder::class,
            PrakerinSeeder::class,
            MonitoringSeeder::class,
            PresensiSeeder::class,
            AbsensiSeeder::class,
            KegiatanSeeder::class,
            AgendaSeeder::class,
            VerifikasiSeeder::class,
            KategorinilaiSeeder::class,
            PenilaianverifSeeder::class,
            NilaiverifSeeder::class,
            PenilaianpklSeeder::class,
            NilaipklSeeder::class,
        ]);
    }
}