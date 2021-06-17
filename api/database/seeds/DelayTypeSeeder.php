<?php

use App\DelayType;
use Illuminate\Database\Seeder;

class DelayTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(DelayType::class)->create([

            'delay_type' => 'Internal',

            'created_at' => now(),
            'updated_at' => now(),

        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Passenger and baggage',

            'created_at' => now(),
            'updated_at' => now(),

        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Cargo and Mail',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Mail only',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Aircraft and Ramp Handling',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Technical and Aircraft Equipment',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Damage to Aircraft',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'EDP / Automated Equipment Failure',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Flight Operations and Crewing',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Weather',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Air Traffic Flow Management Restrictions',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Airport and Government Authorities',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Reactionary',

            'created_at' => now(),
            'updated_at' => now(),




        ]);

        factory(DelayType::class)->create([

            'delay_type' => 'Miscellaneous',

            'created_at' => now(),
            'updated_at' => now(),




        ]);
    }
}
