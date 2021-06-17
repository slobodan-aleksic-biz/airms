<?php

use App\Enums\ComponentTypeEnum;
use App\Part;
use App\StockItem;
use Illuminate\Database\Seeder;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stockItem = StockItem::where('id', 1)->first();

        if($stockItem->component_type == ComponentTypeEnum::EXPENDABLE) {
            $serialOrBatchhNumKey = 'batch_num';
            $serialOrBatchhNumval = 123131231;

            $quantityAlarmVal = 10;

        } else {
            $serialOrBatchhNumKey = 'serial_num';
            $serialOrBatchhNumval = 123131231;

            $quantityAlarmVal = null;
        }


        factory(Part::class, 1)->create([
            'stock_item_id' => $stockItem->id,
            $serialOrBatchhNumKey => $serialOrBatchhNumval,

            'quantity_alarm' => $quantityAlarmVal,
        ]);


        // ==============

        $stockItem = StockItem::where('id', 2)->first();

        if($stockItem->component_type == ComponentTypeEnum::EXPENDABLE) {
            $serialOrBatchhNumKey = 'batch_num';
            $serialOrBatchhNumval = 4341231;

            $quantityAlarmVal = 10;

        } else {
            $serialOrBatchhNumKey = 'serial_num';
            $serialOrBatchhNumval = 3434131231;

            $quantityAlarmVal = null;
        }


        factory(Part::class, 1)->create([
            'stock_item_id' => $stockItem->id,
            $serialOrBatchhNumKey => $serialOrBatchhNumval,

            'quantity_alarm' => $quantityAlarmVal,
        ]);


        // ==============

        $stockItem = StockItem::where('id', 3)->first();

        if($stockItem->component_type == ComponentTypeEnum::EXPENDABLE) {
            $serialOrBatchhNumKey = 'batch_num';
            $serialOrBatchhNumval = 2434131231;

            $quantityAlarmVal = 10;

        } else {
            $serialOrBatchhNumKey = 'serial_num';
            $serialOrBatchhNumval = 4342331231;

            $quantityAlarmVal = null;
        }


        factory(Part::class, 1)->create([
            'stock_item_id' => $stockItem->id,
            $serialOrBatchhNumKey => $serialOrBatchhNumval,

            'quantity_alarm' => $quantityAlarmVal,
        ]);

        // ==============

        $stockItem = StockItem::where('id', 4)->first();

        if($stockItem->component_type == ComponentTypeEnum::EXPENDABLE) {
            $serialOrBatchhNumKey = 'batch_num';
            $serialOrBatchhNumval = 242234131231;

            $quantityAlarmVal = 10;

        } else {
            $serialOrBatchhNumKey = 'serial_num';
            $serialOrBatchhNumval = 444342331231;

            $quantityAlarmVal = null;
        }

        factory(Part::class, 1)->create([
            'stock_item_id' => $stockItem->id,
            $serialOrBatchhNumKey => $serialOrBatchhNumval,

            'quantity_alarm' => $quantityAlarmVal,
        ]);
    }
}
