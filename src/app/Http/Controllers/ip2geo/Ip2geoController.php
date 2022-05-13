<?php

namespace App\Http\Controllers\Ip2geo;

use App\Http\Controllers\Controller;
use App\Models\GeoIpCity;
use Illuminate\Http\Request;

class Ip2geoController extends Controller
{
    public function index(GeoIpCity $geoIp, Request $request)
    {
        $city = $geoIp->getByIpAddress($request->ip);

        return $city ? $city : response('', 404);
    }
    public function store()
    {
        return response('', 404);
    }
}
