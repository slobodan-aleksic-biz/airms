<?php

use App\Enums\ConditionEnum;
use App\Enums\UnserviceableConditionEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('serial_num')->nullable()->unique();
            $table->string('batch_num')->nullable()->unique();


            $table->bigInteger('quantity_alarm')->nullable();

            $table->boolean('is_depleted')->default(false);

            $table->text('note')->nullable();

            $table->unsignedBigInteger('aircraft_type_id')->nullable();
            $table->foreign('aircraft_type_id')->references('id')->on('aircraft_types');
            $table->index(['aircraft_type_id']);

            $table->unsignedBigInteger('aircraft_id')->nullable();
            $table->foreign('aircraft_id')->references('id')->on('aircrafts');
            $table->index(['aircraft_id']);

            $table->unsignedBigInteger('parent_part_id')->nullable();
            $table->foreign('parent_part_id')->references('id')->on('parts');
            $table->index(['parent_part_id']);


            $table->unsignedBigInteger('owner_id')->nullable();
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->index(['owner_id']);

            $table->unsignedBigInteger('stock_item_id');
            $table->foreign('stock_item_id')->references('id')->on('stock_items');
            $table->index(['stock_item_id']);

            $table->unsignedBigInteger('quantity_unit_id')->nullable();
            $table->foreign('quantity_unit_id')->references('id')->on('quantity_units');
            $table->index(['quantity_unit_id']);

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
        Schema::dropIfExists('parts');
    }
}
