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
            WkhubinSeeder::class,
            WalasSeeder::class,
            AngkatanSeeder::class,
            KaprogSeeder::class,
            JurusanSeeder::class,
            KelasSeeder::class,
            SiswaSeeder::class,
            AdmkeuSeeder::class
        ]);

    }
}
