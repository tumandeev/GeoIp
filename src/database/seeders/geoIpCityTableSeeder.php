<?php

namespace Database\Seeders;

use App\Models\GeoIpCity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class geoIpCityTableSeeder extends Seeder
{
    public function run()
    {
        GeoIpCity::create([
            'name' => 'Ulianovsk',
            'country_id' => 1,
            'ip_address' => DB::raw("INET_ATON('192.168.50.73')"),
            'longitude' => 21569.65,
            'latitude' => 22234.00
        ]);

        GeoIpCity::create([
            'name' => 'Samara',
            'country_id' => 1,
            'ip_address' => DB::raw("INET_ATON('192.168.50.63')"),
            'longitude' => 21569.65,
            'latitude' => 22234.00
        ]);

        GeoIpCity::create([
            'name' => 'Moscow',
            'country_id' => 1,
            'ip_address' => DB::raw("INET_ATON('192.168.50.77')"),
            'longitude' => 21569.65,
            'latitude' => 22234.00
        ]);

    }

}
