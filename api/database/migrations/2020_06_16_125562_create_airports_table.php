<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->text('description')->nullable();

            $table->string('iata_code')->nullable();
            $table->string('icao_code')->nullable();

            $table->double('latitude',38,10);
            $table->double('longitude',38,10);
            $table->integer('altitude_m');

            $table->float('time_zone_offset');
            $table->string('time_zone_letter');
            $table->string('time_zone_dst');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->index(['city_id']);

            $table->unique(['name','city_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airports');
    }
}
