<?php

use Illuminate\Database\Seeder;

class ActivityLanguages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_languages')->insert([
            ['Language' => 'IT', 'Activity' => '1'],
            ['Language' => 'IT', 'Activity' => '2'],
            ['Language' => 'IT', 'Activity' => '3'],
            ['Language' => 'IT', 'Activity' => '4'],
        ]);
    }
}
