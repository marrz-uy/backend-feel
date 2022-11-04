<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;


class GastronomicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($c = 481; $c < 501; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Restaurantes' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Restaurantes ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Restaurantes ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('gastronomicos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Restaurantes',
            ]);
        }

        for ($c = 501; $c < 521; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Bares' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Bares ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Bares ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('gastronomicos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Bares',
            ]);
        }
        for ($c = 521; $c < 541; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Comida rapida' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Comida rapida ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Comida rapida ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('gastronomicos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Comida rapida',
            ]);
        }
        for ($c = 541; $c < 561; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Cervezerias' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Cervezerias ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Cervezerias ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('gastronomicos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Cervezerias',
            ]);
        }
        
    }
}
