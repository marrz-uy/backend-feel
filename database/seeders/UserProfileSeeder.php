<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userprofile')->insert([
            'user_id' => 1,
            'nacionalidad' => 'Uruguayo',
            'f_nacimiento' => '1980-12-26',
            'preferencias' => '[{"id":"01","categoria":"Alojamiento","category":"Lodgin","value":"hotel","label":"Hotel","labelEng":"Hotel","labelEsp":"Hotel"},{"id":"21","categoria":"Espectaculos","category":"Shows","value":"cine","label":"Cine","labelEng":"Cinema","labelEsp":"Cine"}]',
        ]); 

        DB::table('userprofile')->insert([
            'user_id' => 2,
            'nacionalidad' => 'Uruguayo',
            'f_nacimiento' => '2020-08-25',
            'preferencias' => '[{"id":"01","categoria":"Alojamiento","category":"Lodgin","value":"hotel","label":"Hotel","labelEng":"Hotel","labelEsp":"Hotel"},{"id":"21","categoria":"Espectaculos","category":"Shows","value":"cine","label":"Cine","labelEng":"Cinema","labelEsp":"Cine"}]',
        ]); 
    }
}
