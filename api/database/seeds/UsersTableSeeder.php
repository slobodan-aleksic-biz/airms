<?php

use App\Enums\EntityEnum;
use App\Enums\UserRoleEnum;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            "name" => "Slobodan Aleksic",
            "email" => "slobodan.aleksic.mne@gmail.com",
            'password' => Hash::make('Password123'),
            'entity' => EntityEnum::ADMIN,
            'role' => UserRoleEnum::ADMIN,
        ]);

        for ($i = 0; $i < 10; $i++) {
            factory(User::class)->create([
                "name" => "Engineer {$i}",
                "email" => "engineer{$i}@gmail.com",
                'password' => Hash::make('Password123'),
                'entity' => EntityEnum::MCC,
                'role' => UserRoleEnum::ENGINEER
            ]);
        }
        for ($i = 0; $i < 10; $i++) {
            factory(User::class)->create([
                "name" => "Technician {$i}",
                "email" => "technician{$i}@gmail.com",
                'password' => Hash::make('Password123'),
                'entity' => EntityEnum::PART_145,
                'role' => UserRoleEnum::TECHNICIAN
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            factory(User::class)->create([
                "name" => "Captain {$i}",
                "email" => "captain{$i}@gmail.com",
                'password' => Hash::make('Password123'),
                'entity' => EntityEnum::CREW_MEMBER,
                'role' => UserRoleEnum::CAPTAIN
            ]);
        }

    }
}
