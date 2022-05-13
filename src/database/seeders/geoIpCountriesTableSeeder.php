<?php

namespace Database\Seeders;

use App\Models\GeoIpCountry;
use Illuminate\Database\Seeder;

class geoIpCountriesTableSeeder extends Seeder
{
    public function run()
    {
        GeoIpCountry::create([
            'name' => 'Russia',
        ]);
    }

}
