<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadesNocturnasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($c = 301; $c < 321; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Discoteca ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook'       => 'https://www.facebook.com/' . 'Discoteca ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Discoteca ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Discoteca',
            ]);
        }

        for ($c = 321; $c < 341; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Casino ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook'       => 'https://www.facebook.com/' . 'Casino ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Casino ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Casino',
            ]);
        }
        for ($c = 341; $c < 361; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Pool ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook'       => 'https://www.facebook.com/' . 'Pool ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Pool ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Pool',
            ]);
        }
        for ($c = 361; $c < 381; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Cantina ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook'       => 'https://www.facebook.com/' . 'Cantina ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Cantina ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Cantina',
            ]);
        }
        for ($c = 381; $c < 401; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Bowling ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook'       => 'https://www.facebook.com/' . 'Bowling ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Bowling ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Bowling',
            ]);
        }
    }
}
