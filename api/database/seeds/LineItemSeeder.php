<?php

use App\Enums\LineItemLocationEnum;
use App\Enums\StockInOut;
use App\LineItem;
use App\Part;
use Illuminate\Database\Seeder;

class LineItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $part = Part::find(1);
        // factory(LineItem::class)->create([
        //     'location' => LineItemLocationEnum::STOCK_A,

        //     'certificate_date' => now(),
        //     'input_date' => now(),



        //     'quantity' => 5,


        //     'stock_id' => 1,
        //     'note' => 'asdf  asd asdf as fasdf',

        //     'part_id' => $part->id,
        // ]);

        // $part = Part::find(2);
        // factory(LineItem::class)->create([


        //     'location' => LineItemLocationEnum::MRO,

        //     'certificate_date' => now(),
        //     'input_date' => now(),



        //     'quantity' => 5,

        //     'stock_id' => 1,
        //     'note' => 'asdf  asd asdf as fasdf',

        //     'part_id' => $part->id,
        // ]);


        // factory(LineItem::class, 10)->create([
        //     'part_id' => 2,
        // ]);

        // factory(LineItem::class, 10)->create([
        //     'part_id' => 3,
        // ]);
        // factory(LineItem::class, 10)->create([
        //     'part_id' => 4,
        // ]);

        // $part = Part::find(3);
        // for($i = 5; $i < 10; $i++) {
        //     factory(LineItem::class, 10)->create([
        //         'part_id' => $part->id,
        //     ]);
        // }

    }
}
