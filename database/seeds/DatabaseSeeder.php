<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //$this->call(UserSeeder::class);
        $this->call(RolesTableSeeder::class);
=======
        //this->call(UserSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SportsTableSeeder::class);

        $this->call(SessionsTableSeeder::class);

>>>>>>> aurel
    }
}
