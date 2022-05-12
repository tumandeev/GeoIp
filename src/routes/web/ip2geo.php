<?php

use App\Http\Controllers\ip2geo\Ip2geoController;

Route::get('ip2geo', [Ip2geoController::class, 'index'])->name('ip2geo.get');


