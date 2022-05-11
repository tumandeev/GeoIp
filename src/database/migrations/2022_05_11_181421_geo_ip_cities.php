<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GeoIpCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_ip_cities', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->foreignId('country_id');
            $table->integer('longitude')->default(0);
            $table->integer('latitude')->default(0);
            $table->timestamp('recorded_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geo_ip_cities');
    }
}
