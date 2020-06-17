<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Session;
use Faker\Generator as Faker;

// php artisan tinker
// voir dépendances
// factory(App\Session::class, 15)->create()


$factory->define(\App\Session::class, function (Faker $faker) {
    return [

            'id_sport' => $faker->numberBetween(1,4),
            'id_auteur' => $faker->numberBetween(1,99),
            'heure_debut' => now(),
            'heure_fin' => now(),
            'date' => $faker->date('Y-m-d'),
            'adresse' => $faker->address,
            'ville' => $faker->city,
            'code_postal' => $faker->postcode,
            'niveau' => $faker->numberBetween(1,4),
            'nb_max_participants' => $faker->numberBetween(1,15),
            'prix' => $faker->numberBetween(10,50),
            'note'=> $faker->numberBetween(1,10),
            'chat_id' => $faker->numberBetween(1,400),
    ];

});
