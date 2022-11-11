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
        $this->call([
            TranslationSeeder::class,
            ServiciosEsencialesSeeder::class,
            EspectaculosSeeder::class,
            EventosSeeder::class,
            TransporteSeeder::class,
            ActividadesInfantilesSeeder::class,
            ActividadesNocturnasSeeder::class,
            PaseosSeeder::class,
            GastronomicosSeeder::class,
            AlojamientosSeeder::class
        ]);
    }
}
