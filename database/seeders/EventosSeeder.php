<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        //!CINES
        DB::table('eventos')->insert([
            'puntosinteres_id'       => 101,
            'NombreEvento'           => 'La pistola desnuda',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 102,
            'NombreEvento'           => 'Titanic',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 103,
            'NombreEvento'           => 'El justiciero',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 104,
            'NombreEvento'           => 'The Dark knight',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 105,
            'NombreEvento'           => 'Superman',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        //!TEATROS

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 121,
            'NombreEvento'           => 'Hamlet',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 122,
            'NombreEvento'           => 'Romeo y Julieta',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 123,
            'NombreEvento'           => 'Sueño de una noche de verano',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 124,
            'NombreEvento'           => 'La casa de Bernarda Alba',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 125,
            'NombreEvento'           => 'La Celestina',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        //!CARNAVAL

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 141,
            'NombreEvento'           => 'Los Choby’s',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 142,
            'NombreEvento'           => 'Tabú',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 143,
            'NombreEvento'           => 'Sociedad Anónima',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 144,
            'NombreEvento'           => 'Yambo Kenia',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 145,
            'NombreEvento'           => 'Los Muchachos',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        //!EVENTO DEPORTIVO

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 161,
            'NombreEvento'           => 'Partido de futbol',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Partido',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 162,
            'NombreEvento'           => 'Partido de basketball',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Partido',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 163,
            'NombreEvento'           => 'Carrera de F1',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Carrera',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 164,
            'NombreEvento'           => 'Partido de volleyball',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Partido',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 165,
            'NombreEvento'           => 'Partido de ping pong',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Partido',
        ]);

    }

}
