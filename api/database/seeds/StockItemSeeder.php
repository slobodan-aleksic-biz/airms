<?php

use App\Enums\ComponentTypeEnum;
use App\StockItem;
use Illuminate\Database\Seeder;

class StockItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StockItem::class, 100)->create([
            'component_type' => ComponentTypeEnum::EXPENDABLE,
            'is_consumable' => rand(1, 10000) % 2 == 0,
            'is_shelf_life_applicable' => rand(1, 10000) % 2 == 0,
        ]);
        factory(StockItem::class, 100)->create([
            'component_type' => ComponentTypeEnum::REPAIRABLE,
            'is_dangerous_goods' => rand(1, 10000) % 2 == 0,
            'is_shelf_life_applicable' => rand(1, 10000) % 2 == 0,
        ]);
        factory(StockItem::class, 100)->create([
            'component_type' => ComponentTypeEnum::ROTABLE,
            'is_dangerous_goods' => rand(1, 10000) % 2 == 0,
            'is_shelf_life_applicable' => rand(1, 10000) % 2 == 0,
        ]);
    }
}
