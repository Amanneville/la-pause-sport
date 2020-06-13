<?php

use App\Sport;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class SportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sport = Sport::insert([
            [ 'name' => 'yoga'],
            [ 'name' => 'running'],
            [ 'name' => 'musculation'],
            [ 'name' => 'makarena'],
            [ 'name' => 'zumba'],
            [ 'name' => 'batchata'],
        ]);
    }
}
