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
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Cine ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Cine ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
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
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Teatro ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Teatro ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
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
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Carnaval ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Carnaval ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
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
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Futbol ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Futbol ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
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
