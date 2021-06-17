<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelayReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delay_reasons', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('code_id', 3)->unique();
            $table->string('code_str', 3)->unique()->nullable();
            $table->string('reason');
            $table->text('description')->nullable();

            $table->unsignedBigInteger('delay_type_id');
            $table->foreign('delay_type_id')->references('id')->on('delay_types');
            $table->index(['delay_type_id']);

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
        Schema::dropIfExists('delay_reasons');
    }
}
