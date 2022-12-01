<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosEsencialesSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($c = 1; $c < 21; $c++) {

            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Hospital ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Hospital ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Hospital ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia', 'Pareja','Solo']),
            ]);

            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Hospitales',
                "created_at"       => null,
                "updated_at"       => null,
            ]);
        }

        for ($c = 21; $c < 41; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Farmacia ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Farmacia ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Farmacia ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia', 'Pareja','Solo']),
            ]);

            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Farmacias',
            ]);
        }

        for ($c = 41; $c < 61; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Cerrajeria ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Cerrajeria ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Cerrajeria ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia', 'Pareja','Solo']),
            ]);

            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Cerrajerias',
            ]);
        }

        for ($c = 61; $c < 81; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Estacion ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Estacion ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Estacion ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia', 'Pareja','Solo']),
            ]);

            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Estaciones de Servicio',
            ]);
        }

        for ($c = 81; $c < 101; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Seccional ' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Seccional ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Seccional ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
                'TipoDeLugar' => $faker->randomElement(['Espacio cerrado','Al aire libre','Ambos']),
                'RestriccionDeEdad' => $faker->randomElement(['Todas','Mayores']),
                'EnfoqueDePersonas' => $faker->randomElement(['Grupo','Familia', 'Pareja','Solo']),
            ]);

            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Seccionales',
            ]);
        }

    }
}
