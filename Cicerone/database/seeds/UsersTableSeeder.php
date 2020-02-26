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
            ['id' => 1, 'name' => 'Davide', 'email' => 'd.carone8@studenti.uniba.it', 'password' => bcrypt('password'), 'cognome' => 'Carone', 'dataNascita' => '1996-08-06', 'sesso' => 'M', 'nazionalita' => 'Italiana', 'cittaResidenza' => 'Oria', 'nazioneResidenza' => 'Italia', 'telefono' => '0123456789'],
            ['id' => 2, 'name' => 'Erik', 'email' => 'e.vergine1@studenti.uniba.it', 'password' => bcrypt('password'), 'cognome' => 'Vergine', 'dataNascita' => '1996-11-12', 'sesso' => 'M', 'nazionalita' => 'Italiana', 'cittaResidenza' => 'Oria', 'nazioneResidenza' => 'Italia', 'telefono' => '0123456789'],
            ['id' => 3, 'name' => 'Andrea', 'email' => 'a.nisio1@studenti.uniba.it', 'password' => bcrypt('password'), 'cognome' => 'Nisio', 'dataNascita' => '1997-10-13', 'sesso' => 'M', 'nazionalita' => 'Italiana', 'cittaResidenza' => 'Palagiano', 'nazioneResidenza' => 'Italia', 'telefono' => '0123456789'],
            ['id' => 4, 'name' => 'Emidio', 'email' => 'e.schirano@studenti.uniba.it', 'password' => bcrypt('password'), 'cognome' => 'Schirano', 'dataNascita' => '1995-1-01', 'sesso' => 'M', 'nazionalita' => 'Italiana', 'cittaResidenza' => 'Squinzano', 'nazioneResidenza' => 'Italia', 'telefono' => '0123456789']
        ]);
    }
}
