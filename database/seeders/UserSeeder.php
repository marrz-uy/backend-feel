<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // User::truncate();
        $csvData  = fopen(base_path('database/csv/users.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                User::create([
                    'name'     => $data['0'],
                    'email'    => $data['1'],
                    'password' => bcrypt($data['2']),
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
