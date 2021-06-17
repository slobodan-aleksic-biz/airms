<?php

use App\Aircraft;
use App\AircraftType;
use Illuminate\Database\Seeder;

class AircraftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $emb195 = factory(AircraftType::class)->create([

            'name' => 'EMB 195',
            'max_seats' => 116,
            'manufacturer' => 'Embraer',
            'iata_code' => 'E95',
            'icao_code' => 'E195',



            'wake' => 'M',
            'max_range' => 3704,
            'max_flight_time_in_min' => 210,

            'created_at' => now(),
        ]);

            factory(Aircraft::class)->create([
                'name' => 'Alfa',
                'reg' => 'AOA',
                'serial_no' => 'AOA',
                'number_of_seats' => 116,
                'aircraft_type_id' => $emb195->id,
                'status' => 1,
                'created_at' => now(),
            ]);

            factory(Aircraft::class)->create([
                'name' => 'Bravo',
                'reg' => 'AOB',
                'serial_no' => 'AOB',
                'number_of_seats' => 116,
                'aircraft_type_id' => $emb195->id,
                'status' => 1,
                'created_at' => now(),
            ]);

            factory(Aircraft::class)->create([
                'name' => 'Carli',
                'reg' => 'AOC',
                'serial_no' => 'AOC',
                'number_of_seats' => 116,
                'aircraft_type_id' => $emb195->id,
                'status' => 1,
                'created_at' => now(),
            ]);




        $fokker = factory(AircraftType::class)->create([

            'name' => 'Fokker 100',
            'max_seats' => 109,
            'manufacturer' => 'Fokker',
            'iata_code' => '100',
            'icao_code' => 'F100',



            'wake' => 'M',
            'max_range' => 2450,
            'max_flight_time_in_min' => 160,

            'created_at' => now(),

        ]);

            factory(Aircraft::class)->create([
                'name' => 'Papa',
                'reg' => 'AOP',
                'serial_no' => 'AOP',
                'number_of_seats' => 109,
                'aircraft_type_id' => $fokker->id,
                'status' => 1,
                'created_at' => now(),
            ]);

            factory(Aircraft::class)->create([
                'name' => 'Mike',
                'reg' => 'AOM',
                'serial_no' => 'AOM',
                'number_of_seats' => 109,
                'aircraft_type_id' => $fokker->id,
                'status' => 1,
                'created_at' => now(),
            ]);
    }
}
