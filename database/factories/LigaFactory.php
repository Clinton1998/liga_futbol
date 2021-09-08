<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Liga;
use Faker\Generator as Faker;

$factory->define(Liga::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'inicio' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'termino' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'cantidad_fechas' => $faker->numberBetween($min = 5, $max = 20),
    ];
});
