<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ActividadesInfantilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($c = 221; $c < 241; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Circo ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Circo ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Circo ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_infantiles')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Circo',
            ]);
        }

        for ($c = 241; $c < 261; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Calesita ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Calesita ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Calesita' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_infantiles')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Calesita',
            ]);
        }

        for ($c = 261; $c < 281; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Maquinitas ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Maquinitas ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Maquinitas ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_infantiles')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Maquinitas',
            ]);
        }

        for ($c = 281; $c < 301; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Juegos Infantiles ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Juegos Infantiles ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Juegos Infantiles ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_infantiles')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Juegos Infantiles',
            ]);
        }
    }
}
