<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoleUser;
use Faker\Generator as Faker;

//factory(App\RoleUser::class, 15)->create()

$factory->define(RoleUser::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,30),
        'role_id' => $faker->numberBetween(1,3),
    ];
});
