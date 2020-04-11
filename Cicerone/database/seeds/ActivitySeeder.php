<?php

use Illuminate\Database\Seeder;

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
            ['ActivityId' => 1, 'nameActivity' => 'Davide attivita', 'user_id' => '1', 'Country' => 'Italia', 'State' => 'Puglia', 'Road' => 'Via San Lorenzo', 'City' => 'Oria', 'postCode' => '72024', 'created_at' =>  Carbon::now(), 'updated_at' => Carbon::now()],
            ['ActivityId' => 2, 'nameActivity' => 'Erik attivita', 'user_id' => '2', 'Country' => 'Italia', 'State' => 'Puglia', 'Road' => 'Via Epitaffio', 'City' => 'Oria', 'postCode' => '72024', 'created_at' =>  Carbon::now(), 'updated_at' => Carbon::now()],
            ['ActivityId' => 3, 'nameActivity' => 'Andrea attivita', 'user_id' => '3', 'Country' => 'Italia', 'State' => 'Puglia', 'Road' => 'Via Dante', 'City' => 'Taranto', 'postCode' => '74121', 'created_at' =>  Carbon::now(), 'updated_at' => Carbon::now()],
            ['ActivityId' => 4, 'nameActivity' => 'Emidio attivita', 'user_id' => '4', 'Country' => 'Italia', 'State' => 'Puglia', 'Road' => 'Via Boggio', 'City' => 'Lizzano', 'postCode' => '74020', 'created_at' =>  Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
