<?php

use App\Model\Sport;
use Illuminate\Database\Seeder;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sport::insert([
            ['name' => 'Yoga'],
            ['name' => 'Musculation'],
            ['name' => 'Running'],
            ['name' => 'Fitness']
        ]);
    }
}
