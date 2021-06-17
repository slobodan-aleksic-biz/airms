<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\ComponentCategoryEnum;
use App\StockItem;
use Faker\Generator as Faker;

$factory->define(StockItem::class, function (Faker $faker) {
    static $number = 10000;
    return [
        'init_part_num' => $number++,
        'name' => $faker->unique()->name,
        'a_t_a_chapter_id' => 1,
        'component_category' => ComponentCategoryEnum::AIRFRAME,
    ];
});
