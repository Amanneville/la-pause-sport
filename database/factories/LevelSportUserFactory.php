<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LevelSportUser;
use Faker\Generator as Faker;

//factory(App\LevelSportUser::class, 45)->create()

$factory->define(\App\LevelSportUser::class, function (Faker $faker) {
    return [
        'id_user' => $faker->unique()->numberBetween(1,45),
        'id_sport' => $faker->numberBetween(1,6),
        'user_current_level' => $faker->numberBetween(1,3),
    ];
});
