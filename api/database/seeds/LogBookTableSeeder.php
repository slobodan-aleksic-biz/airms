<?php

use App\Aircraft;
use App\Airport;
use App\LogBook;
use App\FlightRoute;
use App\User;
use Illuminate\Database\Seeder;

class LogBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $airport_TGD = Airport::where('iata_code', 'TGD')->first();
            $airport_BEG = Airport::where('iata_code', 'BEG')->first();

            $flightRoute_1 = factory(FlightRoute::class)->create([
                'flight_no' => 'YM100',
                'origin' => $airport_TGD->id,
                'destination' => $airport_BEG->id,
                'created_at' => now(),
            ]);

            $aircraft = Aircraft::find(1);
            $captain = User::activeCaptains()->first();


            for($i=1; $i<100; $i++) {
                $n = rand(1,2);
                factory(LogBook::class)->create([
                    'flight_route_id' => $flightRoute_1->id,
                    'aircraft_id' => $aircraft->id,
                    'captain_id' => $captain->id,
                    'flight_time_start' => now()->addHours($n+2+$i*2+4)->addMinutes($n+10+$i),
                    'flight_time_end' => now()->addHours($n+3+$i*2+4)->addMinutes($n+10+$i),
                    'flight_cycles' => 1,
                    'previous_cycles' => 0,
                    'total_cycles' => 0,
                    'flight_hours' => 0,
                    'previous_hours' => 0,
                    'total_hours' => 0,
                    'created_at' => now(),
                ]);
            }

                // factory(LogBook::class)->create([
                //     'flight_route_id' => $flightRoute_1->id,
                //     'aircraft_id' => $aircraft->id,
                //     'captain_id' => $captain->id,
                //     'flight_time_start' => now()->addMinutes(10),
                //     'flight_time_end' => now()->addHour(),
                //     'flight_cycles' => 1,
                //     'created_at' => now(),
                // ]);

            $flightRoute_2 = factory(FlightRoute::class)->create([
                'flight_no' => 'YM101',
                'origin' => $airport_BEG->id,
                'destination' => $airport_TGD->id,
                'created_at' => now(),
            ]);

            // $aircraft2 = Aircraft::find(2);
            // for($i=1; $i<100; $i++) {
            //     $n = rand(1,2);
            //     factory(LogBook::class)->create([
            //         'flight_route_id' => $flightRoute_2->id,
            //         'aircraft_id' => $aircraft2->id,
            //         'captain_id' => $captain->id,
            //         'flight_time_start' => now()->addHours($n+2+$i+4)->addMinutes($n+10+$i),
            //         'flight_time_end' => now()->addHours($n+3+$i+4)->addMinutes($n+10+$i),
            //         'flight_cycles' => 1,
            //         'previous_cycles' => 0,
            //         'total_cycles' => 0,
            //         'flight_hours' => 0,
            //         'previous_hours' => 0,
            //         'total_hours' => 0,
            //         'created_at' => now(),
            //     ]);
            // }
                // factory(LogBook::class)->create([
                //     'flight_route_id' => $flightRoute_2->id,
                //     'aircraft_id' => $aircraft->id,
                //     'captain_id' => $captain->id,
                //     'flight_time_start' => now()->addHours(2)->addMinutes(10),
                //     'flight_time_end' => now()->addHours(3),
                //     'flight_cycles' => 1,
                //     'created_at' => now(),
                // ]);

    }
}
