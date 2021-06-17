<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\LineItemLocationEnum;
use App\LineItem;
use Faker\Generator as Faker;



$factory->define(LineItem::class, function (Faker $faker) {
    $locationArr = [
        LineItemLocationEnum::MRO,
        LineItemLocationEnum::STOCK_A,
        LineItemLocationEnum::SERVICE,
        LineItemLocationEnum::STOCK_B,
    ];


    return [
        'bin' => $faker->unique(true)->numberBetween(10, 100000),


        'time_since_new' => $faker->numberBetween(1, 30),
        'cycles_since_new' => $faker->numberBetween(1, 30),
        'days_since_new' => $faker->numberBetween(1, 30),

        'time_since_overhaul' => $faker->numberBetween(1, 30),
        'cycles_since_overhaul' => $faker->numberBetween(1, 30),
        'days_since_overhaul' => $faker->numberBetween(1, 30),

        'location' => $locationArr[$faker->numberBetween(0, 2)],

        'invoice_ref' => 'invoice_'.$faker->numberBetween(1, 30),

        'certificate_date' => $faker->date,
        'input_date' => $faker->date,

        'quantity' => $faker->numberBetween(1, 30),

        'stock_id' => 1,
        'note' => $faker->text(1000),

        'part_id' => $faker->numberBetween(1, 3),
    ];
});
