<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Part;
use Faker\Generator as Faker;

$factory->define(Part::class, function (Faker $faker) {
    return [
        'note' => $faker->text(1000),

        'aircraft_type_id' => 1,
        'owner_id' => 1,
        'stock_item_id' => $faker->numberBetween(1, 30),

        'quantity_unit_id' => 1,
    ];
});
