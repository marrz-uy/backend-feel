<?php

namespace Database\Seeders;

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
        $this->call([
            TranslationSeeder::class,
            // UserSeeder::class,
            // UserProfileSeeder::class,
            ServiciosEsencialesSeeder::class,
            EspectaculosSeeder::class,
            EventosSeeder::class,
            TransporteSeeder::class,
            ActividadesInfantilesSeeder::class,
            ActividadesNocturnasSeeder::class
        ]);
    }
}
