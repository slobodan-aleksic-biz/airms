<?php

use App\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Owner::class)->create([
            'name' => 'Montenegro Airlines',
        ]);

        factory(Owner::class, 11)->create();
    }
}
