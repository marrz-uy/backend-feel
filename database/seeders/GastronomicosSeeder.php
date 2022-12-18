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
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Restaurantes ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Restaurantes ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('gastronomicos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Restaurantes',
                'ComidaVegge' => 1,
                'Comida' => 1,
                'Alcohol' => 1,
                'MenuInfantil' => 1
            ]);
        }

        for ($c = 501; $c < 521; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Bares' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Bares ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Bares ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('gastronomicos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Bares',
                'ComidaVegge' => 1,
                'Comida' => 1,
                'Alcohol' => 1,
                'MenuInfantil' => 1
            ]);
        }
        for ($c = 521; $c < 541; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Comida rapida' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Comida rapida ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Comida rapida ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('gastronomicos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Comida rapida',
                'ComidaVegge' => 1,
                'Comida' => 1,
                'Alcohol' => 1,
                'MenuInfantil' => 1
            ]);
        }
        for ($c = 541; $c < 561; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Cervezerias' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->randomElement(['Montevideo','Canelones', 'San Jose']),
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->randomElement(['08:00:00','10:00:00', '12:00:00','14:00:00']),
                'HoraDeCierre' => $faker->randomElement(['16:00:00','18:00:00', '20:00:00','22:00:00']),
                'Facebook' => 'https://www.facebook.com/' . 'Cervezerias ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Cervezerias ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia','Pareja']),
            ]);

            DB::table('gastronomicos')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Cervezerias',
                'ComidaVegge' => 1,
                'Comida' => 1,
                'Alcohol' => 1,
                'MenuInfantil' => 1
            ]);
        }
        
    }
}
