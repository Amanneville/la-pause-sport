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

        //$this->call(UserTableSeeder::class);
        $this->call(LevelTableSeeder::class);
        $this->call(UserTableSeeder::class);
       $this->call(SportTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(RoleTableSeeder::class);

    }
}
