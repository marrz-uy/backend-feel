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
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Línea 183 ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Línea 145 ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja','Sin restriccion']),
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
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Radiotaxi ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Radiotaxi ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('transporte')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Taxi',
            ]);
        }
        
    }
}
