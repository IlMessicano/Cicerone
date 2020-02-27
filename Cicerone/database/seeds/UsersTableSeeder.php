<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Davide', 'email' => 'd.carone8@studenti.uniba.it', 'password' => bcrypt('password'), 'surname' => 'Carone', 'birthDate' => '1996-08-06', 'gender' => 'M', 'nationality' => 'Italiana', 'residenceCity' => 'Oria', 'residenceCountry' => 'Italia', 'phone' => '0123456789'],
            ['id' => 2, 'name' => 'Erik', 'email' => 'e.vergine1@studenti.uniba.it', 'password' => bcrypt('password'), 'surname' => 'Vergine', 'birthDate' => '1996-11-12', 'gender' => 'M', 'nationality' => 'Italiana', 'residenceCity' => 'Oria', 'residenceCountry' => 'Italia', 'phone' => '0123456789'],
            ['id' => 3, 'name' => 'Andrea', 'email' => 'a.nisio1@studenti.uniba.it', 'password' => bcrypt('password'), 'surname' => 'Nisio', 'birthDate' => '1997-10-13', 'gender' => 'M', 'nationality' => 'Italiana', 'residenceCity' => 'Taranto', 'residenceCountry' => 'Italia', 'phone' => '0123456789'],
            ['id' => 4, 'name' => 'Emidio', 'email' => 'e.schirano@studenti.uniba.it', 'password' => bcrypt('password'), 'surname' => 'Schirano', 'birthDate' => '1995-1-01', 'gender' => 'M', 'nationality' => 'Italiana', 'residenceCity' => 'Lizzano', 'residenceCountry' => 'Italia', 'phone' => '0123456789']
        ]);
    }
}
