<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspectaculosSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($c = 101; $c < 121; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Cine ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Cine ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Cine ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('espectaculos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Cine',
                "created_at"       => null,
                "updated_at"       => null,
            ]);
        }

        for ($c = 121; $c < 141; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Teatro ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Teatro ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Teatro ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('espectaculos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Teatro',
                "created_at"       => null,
                "updated_at"       => null,
            ]);
        }

        for ($c = 141; $c < 161; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Carnaval ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Carnaval ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Carnaval ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('espectaculos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Carnaval',
                "created_at"       => null,
                "updated_at"       => null,
            ]);

        }

        for ($c = 161; $c < 181; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Futbol ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Futbol ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Futbol ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('espectaculos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'EventoDeportivo',
                "created_at"       => null,
                "updated_at"       => null,
            ]);
        }

    }
}
