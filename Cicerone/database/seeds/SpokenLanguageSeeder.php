<?php

use Illuminate\Database\Seeder;

class SpokenLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spoken_language')->insert([
            ['User' => 1, 'Language' => 'IT'],
            ['User' => 2, 'Language' => 'FR'],
            ['User' => 3, 'Language' => 'IT'],
            ['User' => 4, 'Language' => 'IT'],
            ['User' => 1, 'Language' => 'EN'],
            ['User' => 2, 'Language' => 'IT'],
            ['User' => 2, 'Language' => 'EN'],
            ['User' => 4, 'Language' => 'EN'],
        ]);
    }
}
