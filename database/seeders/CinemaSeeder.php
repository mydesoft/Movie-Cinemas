<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Seeder;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cinema::create([
        	'name' => 'Lekki-Cinema'
        ]);

        Cinema::create([
        	'name' => 'Ajah-Cinema'
        ]);

        Cinema::create([
        	'name' => 'Ikeja-Cinema'
        ]);
    }
}
