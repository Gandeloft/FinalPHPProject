<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Country::create([
            'country_code' => 'HR',
            'country_name' => 'Hrvatska',
            'continent_id' => '1'
        ]);
    }
}
