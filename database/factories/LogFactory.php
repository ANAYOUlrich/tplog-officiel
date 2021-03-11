<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Log;
use Faker\Generator as Faker;

$factory->define(Log::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['Info','Erreur', 'Warning']),
        'date_heure' => $faker->dateTime,
        'message'=>$faker->text, 
        'id_projet'=>$faker->numberBetween(1,10),
    ];
});
