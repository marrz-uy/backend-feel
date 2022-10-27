<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;


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
                'Nombre'       => 'Discoteca ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Discoteca ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Discoteca ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Discoteca',
            ]);
        }

        for ($c = 321; $c < 341; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Casino ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Casino ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Casino ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Casino',
            ]);
        }
        for ($c = 341; $c < 361; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Pool ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Pool ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Pool ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Pool',
            ]);
        }
        for ($c = 361; $c < 381; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Cantina ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Cantina ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Cantina ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Cantina',
            ]);
        }
        for ($c = 381; $c < 401; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Bowling ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Bowling ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Bowling ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_nocturnas')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Bowling',
            ]);
        }
    }
}
