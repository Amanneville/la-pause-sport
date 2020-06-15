<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(\App\Message::class, function (Faker $faker) {
    return [
        'from' => rand(1, 30),
        'to' => rand(1, 30),
        'message' => $faker-> sentence,
        'is_read' => rand(0, 1),
        'session_id' => rand(4, 20),
    ];
});
