<?php

namespace App\Http\Controllers\Ip2geo;

use App\Http\Controllers\Controller;
use App\Models\GeoIpCity;
use App\Models\GeoIpCountry;
use Illuminate\Support\Facades\DB;

class Ip2geoController extends Controller
{
    public function index(GeoIpCity $geoIp)
    {

//        GeoIpCountry::create(['country' => 'Russia']);

//        $data = [
//            'city' => 'ulianovsk2',
//            'country_id' => 1,
////            'ip_address' => DB::raw("INET_ATON('198.167.1.165')"),
//            'ip_address' => DB::raw("INET_ATON('198.167.1.1')"),
//            'longitude' => '123125.123',
//            'latitude' => '123.123'
//        ];
//        dd($data, DB::raw("INET_ATON('198.167.1.165')"));
//        $geoIp->create($data);


        $city = $geoIp->searchByIpAddress('198.167.1.1')
            ->with('country')
            ->select(['city', 'id'])
            ->get()
            ->first();

        dd($city->toJson());
        return view('main.index');
    }
}
