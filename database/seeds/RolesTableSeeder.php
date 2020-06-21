<?php

use App\Model\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['statut' => 'Administrateur'],
            ['statut' => 'Coach'],
            ['statut' => 'Elèves']
        ]);
    }
}
