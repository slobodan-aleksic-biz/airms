<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLogBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_book', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('flight_route_id');
            $table->foreign('flight_route_id')->references('id')->on('flight_routes');
            $table->index(['flight_route_id']);

            $table->unsignedBigInteger('aircraft_id');
            $table->foreign('aircraft_id')->references('id')->on('aircrafts');
            $table->index(['aircraft_id']);

            $table->unsignedBigInteger('captain_id');
            $table->foreign('captain_id')->references('id')->on('users');
            $table->index(['captain_id']);

            $table->timestamp('flight_time_start');
            $table->timestamp('flight_time_end');

            $table->unique(['flight_route_id', 'aircraft_id', 'flight_time_start'], 'uk_log_book');

            $table->double('flight_hours')->default(0);
            $table->double('previous_hours')->default(0);
            $table->double('total_hours')->default(0);

            $table->bigInteger('flight_cycles')->default(0);
            $table->bigInteger('previous_cycles')->default(0);
            $table->bigInteger('total_cycles')->default(0);

            $table->unsignedBigInteger('reason_1')->nullable();
            $table->foreign('reason_1')->references('id')->on('delay_reasons');
            $table->index(['reason_1']);
            $table->integer('delay_in_min_1')->nullable();

            $table->unsignedBigInteger('reason_2')->nullable();
            $table->foreign('reason_2')->references('id')->on('delay_reasons');
            $table->index(['reason_2']);
            $table->integer('delay_in_min_2')->nullable();

            $table->unsignedBigInteger('reason_3')->nullable();
            $table->foreign('reason_3')->references('id')->on('delay_reasons');
            $table->index(['reason_3']);
            $table->integer('delay_in_min_3')->nullable();


            $table->timestamps();
        });

        // DB::connection()->unprepared('SET GLOBAL log_bin_trust_function_creators = 1;');

        DB::connection()->unprepared('
            CREATE TRIGGER log_book_insert_trg
            BEFORE INSERT ON log_book
            FOR EACH ROW
            BEGIN
                DECLARE previous_hours DOUBLE;
                DECLARE previous_cycles INT;

                SET NEW.flight_hours = round(timestampdiff(MINUTE,NEW.flight_time_start, NEW.flight_time_end)/60, 2);

                select fe1.total_hours
                    into previous_hours
                   from log_book fe1
                  where fe1.aircraft_id = NEW.aircraft_id
                    and fe1.flight_time_start < NEW.flight_time_start
                  order by flight_time_start desc
                  limit 1;

                IF previous_hours IS null THEN
                    SET previous_hours = 0;
                END IF;

                SET NEW.previous_hours = previous_hours;

                SET NEW.total_hours = NEW.flight_hours + NEW.previous_hours;

                  SELECT fe1.total_hours
                    INTO previous_cycles
                    FROM log_book fe1
                   WHERE fe1.aircraft_id = NEW.aircraft_id
                     AND fe1.flight_time_start < NEW.flight_time_start
                ORDER BY flight_time_start desc
                   LIMIT 1;

                IF previous_cycles IS null THEN
                    SET previous_cycles = 0;
                END IF;

                SET NEW.previous_cycles = previous_cycles;

                SET NEW.total_cycles = NEW.flight_cycles + NEW.previous_cycles;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
            DROP TRIGGER IF EXISTS log_book_insert_trg;
        ');

        Schema::dropIfExists('log_book');
    }
}
