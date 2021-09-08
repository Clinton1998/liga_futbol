<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Equipo;
use Faker\Generator as Faker;

$factory->define(Equipo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'cancha' => $faker->state,
        'fundacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
