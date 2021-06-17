<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAircraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircrafts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('reg');
            $table->string('serial_no')->unique();

            $table->integer('number_of_seats')->default(0);

            $table->integer('status')->default(0);

            $table->unsignedBigInteger('aircraft_type_id');
            $table->foreign('aircraft_type_id')->references('id')->on('aircraft_types');
            $table->index(['aircraft_type_id']);

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
        Schema::dropIfExists('aircrafts');
    }
}
