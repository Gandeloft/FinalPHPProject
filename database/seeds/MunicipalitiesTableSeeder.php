<?php

use Illuminate\Database\Seeder;

class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Municipality::create([
            'municipality_name' => 'Odra',
            'city_id' => 1
            ]
        );
    }
}
