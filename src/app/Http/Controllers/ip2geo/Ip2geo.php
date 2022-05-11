<?php

namespace App\Http\Controllers\Ip2geo;

use App\Http\Controllers\Controller;


class Ip2geo extends Controller
{
    public function index()
    {
dd('test');
        return view('main.index');
    }
}
