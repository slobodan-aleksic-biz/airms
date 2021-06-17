<?php

use App\Action;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Action::class)-> create([
            'name' => 'Overhaul',
            'created_at' => now(),
        ]);
        factory(Action::class)-> create([
            'name' => 'Bench Test',
            'created_at' => now(),
        ]);
        factory(Action::class)-> create([
            'name' => 'Repair',
            'created_at' => now(),
        ]);
        factory(Action::class)-> create([
            'name' => 'Inspection',
            'created_at' => now(),
        ]);
        factory(Action::class)-> create([
            'name' => 'Modification',
            'created_at' => now(),
        ]);
        factory(Action::class)-> create([
            'name' => 'Test',
            'created_at' => now(),
        ]);
    }
}
