<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlojamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($c = 561; $c < 581; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Hotel' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre'   => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook'       => 'https://www.facebook.com/' . 'Hotel ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Hotel ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
            ]);
            DB::table('alojamientos')->insert([
                'puntosinteres_id'  => $c,
                'Tipo'              => 'Hotel',
                'Habitaciones'      => 5,
                'Calificaciones'    => 3,
                'TvCable'           => 1,
                'Piscina'           => 1,
                'Wifi'              => 1,
                'AireAcondicionado' => 1,
                'BanoPrivad'        => 1, 
                'Casino'            => 1,
                'Bar'               => 1,
                'Restaurante'       => 1,
                'Desayuno'          => 1,
            ]);
        }

        for ($c = 581; $c < 601; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Hostel' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre'   => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook'       => 'https://www.facebook.com/' . 'Hostel ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Hostel ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
            ]);
            DB::table('alojamientos')->insert([
                'puntosinteres_id'  => $c,
                'Tipo'              => 'Hostel',
                'Habitaciones'      => 5,
                'Calificaciones'    => 3,
                'TvCable'           => 1,
                'Piscina'           => 1,
                'Wifi'              => 1,
                'AireAcondicionado' => 1,
                'BanoPrivad'        => 1,
                'Casino'            => 1,
                'Bar'               => 1,
                'Restaurante'       => 1,
                'Desayuno'          => 1,
            ]);
        }

        for ($c = 601; $c < 621; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Motel' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre'   => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook'       => 'https://www.facebook.com/' . 'Motel ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Motel ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
            ]);

            DB::table('alojamientos')->insert([
                'puntosinteres_id'  => $c,
                'Tipo'              => 'Motel',
                'Habitaciones'      => 5,
                'Calificaciones'    => 3,
                'TvCable'           => 1,
                'Piscina'           => 1,
                'Wifi'              => 1,
                'AireAcondicionado' => 1,
                'BanoPrivad'        => 1,
                'Casino'            => 1,
                'Bar'               => 1,
                'Restaurante'       => 1,
                'Desayuno'          => 1,
            ]);
        }
        for ($c = 621; $c < 641; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Estancia' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre'   => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook'       => 'https://www.facebook.com/' . 'Estancia ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Estancia ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
            ]);
            DB::table('alojamientos')->insert([
                'puntosinteres_id'  => $c,
                'Tipo'              => 'Estancia',
                'Habitaciones'      => 5,
                'Calificaciones'    => 3,
                'TvCable'           => 1,
                'Piscina'           => 1,
                'Wifi'              => 1,
                'AireAcondicionado' => 1,
                'BanoPrivad'        => 1,
                'Casino'            => 1,
                'Bar'               => 1,
                'Restaurante'       => 1,
                'Desayuno'          => 1,
            ]);
        }

        for ($c = 641; $c < 661; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Camping' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre'   => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook'       => 'https://www.facebook.com/' . 'Camping ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Camping ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
            ]);
            DB::table('alojamientos')->insert([
                'puntosinteres_id'  => $c,
                'Tipo'              => 'Camping',
                'Habitaciones'      => 5,
                'Calificaciones'    => 3,
                'TvCable'           => 1,
                'Piscina'           => 1,
                'Wifi'              => 1,
                'AireAcondicionado' => 1,
                'BanoPrivad'        => 1,
                'Casino'            => 1,
                'Bar'               => 1,
                'Restaurante'       => 1,
                'Desayuno'          => 1,
            ]);
        }

        for ($c = 661; $c < 681; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'         => 'Casa' . $faker->city,
                'Departamento'   => $faker->state,
                'Ciudad'         => $faker->city,
                'Direccion'      => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre'   => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook'       => 'https://www.facebook.com/' . 'Casa ' . $c,
                'Instagram'      => 'https://www.instagram.com/' . 'Casa ' . $c,
                'Web' => 'https://www.google.com/',
                'Descripcion'    => $faker->text($maxNbChars = 200),
                'Imagen'         => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330),
            ]);
            DB::table('alojamientos')->insert([
                'puntosinteres_id'  => $c,
                'Tipo'              => 'Casa',
                'Habitaciones'      => 5,
                'Calificaciones'    => 3,
                'TvCable'           => 1,
                'Piscina'           => 1,
                'Wifi'              => 1,
                'AireAcondicionado' => 1,
                'BanoPrivad'        => 1,
                'Casino'            => 1,
                'Bar'               => 1,
                'Restaurante'       => 1,
                'Desayuno'          => 1,
            ]);

        }
    }
}
