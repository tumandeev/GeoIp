<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeoIpCountry extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
    ];

    public function cities()
    {
        return $this->hasMany(GeoIpCity::class);
    }

}
