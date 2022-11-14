<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;


class PaseosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($c = 401; $c < 421; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Playas ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Playas ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Playas ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('paseos')->insert([
                'puntosinteres_id' => $c,
                'Recomendaciones'  => 'Punta del Este',
                'Tipo'             => 'Playas',
            ]);
        }

        for ($c = 421; $c < 441; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Ejercicios al aire libre ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Ejercicios al aire libre ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Ejercicios al aire libre ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('paseos')->insert([
                'puntosinteres_id' => $c,
                'Recomendaciones'  => 'Plaza de deportes',
                'Tipo'             => 'Ejercicios al aire libre',
            ]);
        }
        for ($c = 441; $c < 461; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Cerros ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Cerros ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Cerros ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('paseos')->insert([
                'puntosinteres_id' => $c,
                'Recomendaciones'  => 'Cerro pan de Azúcar',
                'Tipo'             => 'Cerros',
            ]);
        }
        for ($c = 461; $c < 481; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Sierras ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Sierras ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Sierras ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('paseos')->insert([
                'puntosinteres_id' => $c,
                'Recomendaciones'  => 'Sierra de las ánimas',
                'Tipo'             => 'Sierras',
            ]);
        }
    }
}
