<?php

namespace Database\Seeders;

use App\Models\PuntosInteres;
use App\Models\Transporte;
use Faker\Factory;
use Illuminate\Database\Seeder;

class Transportes2Seeder extends Seeder
{
    public function run()
    {
        $faker    = Factory::create();
        $csvData  = fopen(base_path('database/csv/transporte.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                $transporte = PuntosInteres::create([
                    'Nombre'            => $data['0'],
                    'Departamento'      => $data['1'],
                    'Ciudad'            => $data['2'],
                    'Direccion'         => $data['3'],
                    'HoraDeApertura'    => $data['4'],
                    'HoraDeCierre'      => $data['5'],
                    'Facebook'          => $data['6'],
                    'Instagram'         => $data['7'],
                    'Web'               => $data['8'],
                    'Descripcion'       => $data['9'],
                    'Imagen'            => $faker->imageUrl($width = 640, $height = 480),
                    'Latitud'           => rand(3474990, 3493590),
                    'Longitud'          => rand(5583360, 5633330),
                    'TipoDeLugar'       => $data['13'],
                    'RestriccionDeEdad' => $data['14'],
                    'EnfoqueDePersonas' => $data['15'],
                ]);
                $transporte->save();
                $transporte->id;

                Transporte::create([
                    'puntosinteres_id' => $transporte->id,
                    'Tipo'             => $data['17'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
