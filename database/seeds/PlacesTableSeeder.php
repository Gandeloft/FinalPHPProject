<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Place::create([
            'place_name' => 'Restoran',
            'municipality_id' => 1
            ]
        );
    }
}
