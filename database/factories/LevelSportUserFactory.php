<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LevelSportUser;
use Faker\Generator as Faker;

// factory(App\LevelSportUser::class, 15)->create()

$factory->define(\App\LevelSportUser::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(18,70),
        'sport_id' => $faker->numberBetween(1,3),
        'level_id' => $faker->numberBetween(1,3),
    ];
});
