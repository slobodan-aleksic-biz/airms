<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\QuantityUnit;
use Faker\Generator as Faker;

$factory->define(QuantityUnit::class, function (Faker $faker) {
    return [
        'code' => $faker->name,
        'name' => $faker->name,
        'description' => $faker->name,
    ];
});
