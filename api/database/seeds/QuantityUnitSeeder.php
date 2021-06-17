<?php

use App\QuantityUnit;
use Illuminate\Database\Seeder;

class QuantityUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Consumable

        factory(QuantityUnit::class)->create([
            'code' => 'ml',
            'name' => 'Milliliter',
            'is_consumable' => true,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'cl',
            'name' => 'Centiliter',
            'is_consumable' => true,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'dl',
            'name' => 'Deciliter',
            'is_consumable' => true,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'l',
            'name' => 'Liter',
            'is_consumable' => true,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'dal',
            'name' => 'Decaliter',
            'is_consumable' => true,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'hl',
            'name' => 'Hectoliter',
            'is_consumable' => true,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'kl',
            'name' => 'Kiloliter',
            'is_consumable' => true,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'gal',
            'name' => 'Gallon',
            'is_consumable' => true,
        ]);

        // Non Consumable

        factory(QuantityUnit::class)->create([
            'code' => 'piece',
            'name' => 'Piece',
            'is_consumable' => false,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'mg',
            'name' => 'Milligram',
            'is_consumable' => false,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'cg',
            'name' => 'Centigram',
            'is_consumable' => false,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'dg',
            'name' => 'Decigram',
            'is_consumable' => false,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'g',
            'name' => 'Gram',
            'is_consumable' => false,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'dag',
            'name' => 'Decagram',
            'is_consumable' => false,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'hg',
            'name' => 'Hectogram',
            'is_consumable' => false,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'kg',
            'name' => 'Kilogram',
            'is_consumable' => false,
        ]);
        factory(QuantityUnit::class)->create([
            'code' => 'T',
            'name' => 'Tone',
            'is_consumable' => false,
        ]);
    }
}
