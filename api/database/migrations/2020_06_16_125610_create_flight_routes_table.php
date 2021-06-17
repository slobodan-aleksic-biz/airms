<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_routes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('flight_no')->unique();

            $table->unsignedBigInteger('origin');
            $table->foreign('origin')->references('id')->on('airports');
            $table->index(['origin']);

            $table->unsignedBigInteger('destination');
            $table->foreign('destination')->references('id')->on('airports');
            $table->index(['destination']);

            $table->unique(['flight_no', 'origin', 'destination'], 'uk_flight_routes');
            $table->unique(['origin', 'destination'], 'uk_flight_routes_org_dest');

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
        Schema::dropIfExists('flight_routes');
    }
}
