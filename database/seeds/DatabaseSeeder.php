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

        //$this->call(UserSeeder::class);

        //$this->call(UserTableSeeder::class);
       // $this->call(SessionTableSeeder::class);
        $this->call(SportTableSeeder::class);
        $this->call(RoleTableSeeder::class);


    }
}
