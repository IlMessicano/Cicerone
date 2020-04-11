<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity')->insert([
            ['ActivityId' => 1, 'nameActivity' => 'Davide attivita', 'imgActivity' => 'defaultActivity.jpeg', 'description' => '', 'latCoord' => '', 'longCoord' => '', 'user_id' => '1', 'Country' => 'Italia', 'State' => 'Puglia', 'Road' => 'Via San Lorenzo', 'City' => 'Oria', 'postCode' => '72024', 'created_at' =>  Carbon::now(), 'updated_at' => Carbon::now()],
            ['ActivityId' => 2, 'nameActivity' => 'Erik attivita', 'imgActivity' => 'defaultActivity.jpeg','description' => '','latCoord' => '', 'longCoord' => '','user_id' => '2', 'Country' => 'Italia', 'State' => 'Puglia', 'Road' => 'Via Epitaffio', 'City' => 'Oria', 'postCode' => '72024', 'created_at' =>  Carbon::now(), 'updated_at' => Carbon::now()],
            ['ActivityId' => 3, 'nameActivity' => 'Andrea attivita', 'imgActivity' => 'defaultActivity.jpeg','description' => '','latCoord' => '', 'longCoord' => '','user_id' => '3', 'Country' => 'Italia', 'State' => 'Puglia', 'Road' => 'Via Dante', 'City' => 'Taranto', 'postCode' => '74121', 'created_at' =>  Carbon::now(), 'updated_at' => Carbon::now()],
            ['ActivityId' => 4, 'nameActivity' => 'Emidio attivita', 'imgActivity' => 'defaultActivity.jpeg','description' => '', 'latCoord' => '', 'longCoord' => '','user_id' => '4', 'Country' => 'Italia', 'State' => 'Puglia', 'Road' => 'Via Boggio', 'City' => 'Lizzano', 'postCode' => '74020', 'created_at' =>  Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
