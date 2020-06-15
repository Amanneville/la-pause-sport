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
        'age' => $faker->numberBetween(18,70),
        'adresse' => $faker->address,
        'code_postal' => $faker->postcode, // changer en string
        'avatar' => $faker->ipv4,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'ip_address' => $faker->ipv4,
        'password' => '$2y$10$jWlKgEdG2oruR4UJ1SFyZOs9i.TTG4KEMT2VVH7WSpMD/jtMIlrpm', // 123456
        'remember_token' => Str::random(10),
    ];

});
