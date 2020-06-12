<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// php artisan tinker

// Attention : importer la classe

// @documentation : https://github.com/fzaninotto/Faker
// @link : https://www.youtube.com/watch?v=TxfFw6AyVnc
//                  nb de personnes à créer.
// factory(App\User::class, 15)->create()

$factory->define(User::class, function (Faker $faker) {
    return [


        'firstname' => $faker->name,
        'lastname' => $faker->lastName,
        'avatar' => 'https://via.placeholder.com/150',
        'age' => $faker->numberBetween(18,70),
        'adresse' => $faker->address, // changer en string
        'code_postal' => $faker->postcode,
        'sport1' => $faker->numberBetween(1,4),
        'niveau1' => $faker->numberBetween(1,4),
        'exp1' =>  $faker->numberBetween(2,99),
        'sport2'=> $faker->numberBetween(1,4),
        'niveau2' =>$faker->numberBetween(1,3),
        'exp2' =>  $faker->numberBetween(200,400),
        'sport3'=> $faker->numberBetween(1,4),
        'niveau3' =>$faker->numberBetween (1,4),
        'exp3' => $faker->numberBetween(2,40),
        'reputation_coach' => $faker->numberBetween(10,50),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
]
