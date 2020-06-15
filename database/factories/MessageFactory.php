<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Model\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
//    do {
//        $from = rand(1, 30);
//        $to = rand(1, 30);
//        $is_read = rand(0, 1);
//    } while ($from === $to);

    return [
        'from_id' => rand(32, 40),
        'to' => rand(1, 30),
        'message' => $faker-> sentence,
        'is_read' => rand(0, 1),
        'session_id' => rand(1, 20),
    ];
});
