<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAircraftTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircraft_types', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');

            $table->integer('max_seats');

            $table->string('manufacturer');

            $table->string('iata_code', 5);

            $table->string('icao_code', 5);

            $table->string('wake', 10);

            $table->integer('max_range');

            $table->integer('max_flight_time_in_min');

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
        Schema::dropIfExists('aircraft_types');
    }
}
