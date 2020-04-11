<?php

use Illuminate\Database\Seeder;

class ActivityEnrollmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity__enrollments')->insert([
            ['id' => 1, 'User' => '1', 'PlanningId' => '2', 'enrollmentDate' => '2020-08-05'],
            ['id' => 2, 'User' => '2', 'PlanningId' => '1', 'enrollmentDate' => '2020-04-08'],
            ['id' => 3, 'User' => '3', 'PlanningId' => '4', 'enrollmentDate' => '2020-03-02'],
            ['id' => 4, 'User' => '4', 'PlanningId' => '3', 'enrollmentDate' => '2020-04-16'],
    }
}
