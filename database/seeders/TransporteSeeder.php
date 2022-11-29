<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class TransporteSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();

        for ($c = 181; $c < 201; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Ómnibus ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Línea 183 ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Línea 145 ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('transporte')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Omnibus',
            ]);
        }

        for ($c = 201; $c < 221; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Taxi ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Radiotaxi ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Radiotaxi ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('transporte')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Taxi',
            ]);
        }
        
    }
}
