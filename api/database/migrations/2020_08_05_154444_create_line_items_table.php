<?php

use App\Enums\ConditionEnum;
use App\Enums\LineItemLocationEnum;
use App\Enums\StockInOut;
use App\Enums\UnserviceableConditionEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_items', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('bin')->unique();

            $table->boolean('did_it_come_from_mro_or_st')->default(false);

            $table->string('part_num')->nullable();

            // STOCK

                $table->date('certificate_date');
                $table->date('input_date');

                $table->string('invoice_ref')->nullable();

                $table->bigInteger('quantity')->default(1);


                $table->enum('condition', [
                    ConditionEnum::SERVICEABLE,
                    ConditionEnum::UNSERVICEABLE,
                ])->default(ConditionEnum::SERVICEABLE);
                $table->enum('unserviceable_condition', [
                    UnserviceableConditionEnum::QUARANTINE,
                    UnserviceableConditionEnum::SCRAPPED,
                ])->nullable();

                $table->bigInteger('shelf_life')->nullable();
                $table->bigInteger('shelf_life_alarm')->nullable();


                $table->text('note')->nullable();


                $table->enum('location', [
                    LineItemLocationEnum::MRO,
                    LineItemLocationEnum::STOCK_A,
                    LineItemLocationEnum::SERVICE,
                    LineItemLocationEnum::STOCK_B,
                    LineItemLocationEnum::TRANSFER_TO,
                ]);



                $table->unsignedBigInteger('technician_id')->nullable();
                $table->foreign('technician_id')->references('id')->on('users');
                $table->index(['technician_id']);

                $table->unsignedBigInteger('action_by_storekeeper_id')->nullable();
                $table->foreign('action_by_storekeeper_id')->references('id')->on('users');
                $table->index(['action_by_storekeeper_id']);

                $table->date('action_by_storekeeper_id_at')->nullable();

                $table->unsignedBigInteger('stock_id')->nullable();
                $table->foreign('stock_id')->references('id')->on('stocks');
                $table->index(['stock_id']);

                $table->string('stock_position')->nullable();



            // end STOCK

            // MRO

                $table->unsignedBigInteger('aircraft_id')->nullable();
                $table->foreign('aircraft_id')->references('id')->on('aircrafts');
                $table->index(['aircraft_id']);

                $table->string('location_txt')->nullable();
                // --- --- ---
                $table->string('work_or_engineering_order')->nullable();
                // $table->foreign('reserved_by_work_order_id')->references('id')->on('users');
                $table->index(['work_or_engineering_order']);
                // --- --- ---
                $table->unsignedBigInteger('action_by_engineer_id')->nullable();
                $table->foreign('action_by_engineer_id')->references('id')->on('users');
                $table->index(['action_by_engineer_id']);

                $table->date('action_by_engineer_id_at')->nullable();
                // --- --- --

            // end MRO

            // SERVICE

            $table->unsignedBigInteger('shop_id')->nullable();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->index(['shop_id']);

            // end SERVICE


            $table->bigInteger('time_since_new')->nullable();
            $table->bigInteger('cycles_since_new')->nullable();
            $table->bigInteger('days_since_new')->nullable();

            $table->bigInteger('time_since_overhaul')->nullable();
            $table->bigInteger('cycles_since_overhaul')->nullable();
            $table->bigInteger('days_since_overhaul')->nullable();


            $table->unsignedBigInteger('part_id');
            $table->foreign('part_id')->references('id')->on('parts');
            $table->index(['part_id']);





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
        Schema::dropIfExists('line_items');
    }
}
