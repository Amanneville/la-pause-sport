<?php

use App\Session;
use Illuminate\Database\Seeder;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Session::insert([
            'id_auteur' => '2',
            'id_sport' => '1',
            'heure_debut' => '15:35:23',
            'heure_fin' => ' 14:33:22',
            'date' => '2020-06-10',
            'adresse' => 'nom de rue',
            'code_postal' => '33600',
            'ville' => 'Pessac',
            'niveau' => '1',
            'nb_max_participants' => '15',
            'prix' => '20',
            'note' => '0',
            'chat_id' => '1',
        ]);
    }
}
