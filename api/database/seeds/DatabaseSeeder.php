<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(AirportsTableSeeder::class);
        $this->call(AircraftsTableSeeder::class);

        $this->call(ATAChaptersTableSeeder::class);
        $this->call(DelayTypeSeeder::class);
        $this->call(DelayReasonSeeder::class);
        $this->call(LogBookTableSeeder::class);

        $this->call(ActionSeeder::class);

        $this->call(OwnerSeeder::class);
        $this->call(QuantityUnitSeeder::class);
        $this->call(StockSeeder::class);

        $this->call(StockItemSeeder::class);
        $this->call(PartSeeder::class);
        $this->call(LineItemSeeder::class);
    }
}
