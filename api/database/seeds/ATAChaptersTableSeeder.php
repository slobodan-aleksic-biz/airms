<?php

use App\ATAChapter;
use App\ATAChapterPara;
use App\ATAChapterType;
use Illuminate\Database\Seeder;

class ATAChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $ata00 = factory(ATAChapter::class)->create([
                'code' => '00',
                'name' => 'GENERAL',
                'created_at' => now(),
            ]);

            $ata01 = factory(ATAChapter::class)->create([
                'code' => '01',
                'name' => 'MAINTENANCE POLICY',
                'created_at' => now(),
            ]);

            $ata02 = factory(ATAChapter::class)->create([
                'code' => '02',
                'name' => 'OPERATIONS',
                'created_at' => now(),
            ]);

            $ata03 = factory(ATAChapter::class)->create([
                'code' => '03',
                'name' => 'SUPPORT',
                'created_at' => now(),
            ]);

            $ata04 = factory(ATAChapter::class)->create([
                'code' => '04',
                'name' => 'AIRWORTHINESS LIMITATIONS',
                'created_at' => now(),
            ]);

            $ata05 = factory(ATAChapter::class)->create([
                'code' => '05',
                'name' => 'TIME LIMITS/MAINTENANCE CHECKS',
                'created_at' => now(),
            ]);

            $ata06 = factory(ATAChapter::class)->create([
                'code' => '06',
                'name' => 'DIMENSIONS AND AREAS',
                'created_at' => now(),
            ]);

    }
}
