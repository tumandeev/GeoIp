<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GeoIpCity extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'country_id',
        'ip_address',
        'longitude',
        'latitude',
    ];

    public function country()
    {
        return $this->belongsTo(GeoIpCountry::class);
    }

    public function scopeSearchByIpAddress($query, $ipAddress)
    {
        if(!empty($ipAddress)){
            $query->where('ip_address', '=', DB::raw("INET_ATON('$ipAddress')"));
        }
    }

//    public function scopeGetCountry($query){
//        $query->with(['country' => function($subQuery){
//            $subQuery->select('country', 'id');
//        }]);
//    }
}
