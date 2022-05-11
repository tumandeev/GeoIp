<?php

use App\Http\Controllers\ip2geo\Ip2geo;

Route::get('ip2geo', [Ip2geo::class, 'index'])->name('ip2geo.get');


