<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class GeoIpCity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id',
        'ip_address',
        'longitude',
        'latitude',
    ];

    public function country()
    {
        return $this->belongsTo(GeoIpCountry::class);
    }

    public function getByIpAddress($ipAddress = '')
    {
        $city = Cache::remember($ipAddress, now()->addMinutes(30), function () use ($ipAddress){
            return $this->with('country')
                ->where('ip_address', '=', DB::raw("INET_ATON('$ipAddress')"))
                ->get()
                ->first();
        });

        $response = [];
        if (!empty($city)) {
            $response = [
                'city' => $city->name,
                'country' => $city->country->name,
                'longitude' => $city->longitude,
                'latitude' => $city->latitude,
            ];
        }
        return $response;
    }
    // scopes
    public function scopeSearchByIpAddress($query, $ipAddress)
    {
        if (!empty($ipAddress)) {
            $query->where('ip_address', '=', DB::raw("INET_ATON('$ipAddress')"));
        }
    }
}
