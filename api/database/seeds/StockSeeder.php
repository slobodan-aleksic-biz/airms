<?php

use App\Airport;
use App\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airportTGD = Airport::where('iata_code', 'TGD')->first();

        factory(Stock::class)->create([
            'name' => 'Podgorica',
            'airport_id' => $airportTGD->id,
            'description' => 'Glavni magacin',
        ]);

        $airportBEG = Airport::where('iata_code', 'BEG')->first();

        factory(Stock::class)->create([
            'name' => 'Belgrade',
            'airport_id' => $airportBEG->id,
        ]);
    }
}
