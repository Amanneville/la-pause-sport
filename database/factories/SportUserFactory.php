<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SportUser;
use Faker\Generator as Faker;
// factory(App\SportUser::class, 40)->create()
$factory->define(\App\SportUser::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,45),
        'sport_id' => $faker->numberBetween(1,4),
        'user_current_level' => $faker->numberBetween(1,3)
    ];
});
