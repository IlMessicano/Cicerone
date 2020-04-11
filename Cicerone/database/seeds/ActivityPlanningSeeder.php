<?php

use Illuminate\Database\Seeder;

class ActivityPlanningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_planning')->insert([
            ['planningId' => 1, 'startDate' => '2020-04-09 20:30:00', 'stopDate' => '2020-04-09 21:30:00', 'maxPartecipants' => '50', 'numPartecipants' => '40', 'cost' => '30', 'activity_id' => '1'],
            ['planningId' => 2, 'startDate' => '2020-05-09 20:30:00', 'stopDate' => '2020-05-09 21:30:00', 'maxPartecipants' => '60', 'numPartecipants' => '50', 'cost' => '40', 'activity_id' => '2'],
            ['planningId' => 3, 'startDate' => '2020-04-17 10:30:00', 'stopDate' => '2020-04-17 12:30:00', 'maxPartecipants' => '40', 'numPartecipants' => '20', 'cost' => '20', 'activity_id' => '3'],
            ['planningId' => 4, 'startDate' => '2020-03-03 20:30:00', 'stopDate' => '2020-03-03 21:30:00', 'maxPartecipants' => '80', 'numPartecipants' => '60', 'cost' => '50', 'activity_id' => '4'],
        ]);
    }
}
