<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SessionUser;
use Faker\Generator as Faker;
// factory(App\SessionUser::class, 15)->create()
$factory->define(SessionUser::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,45),
        'session_id' => $faker->numberBetween(68, 70),
    ];
});
