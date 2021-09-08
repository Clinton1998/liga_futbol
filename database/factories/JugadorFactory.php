<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jugador;
use Faker\Generator as Faker;

$factory->define(Jugador::class, function (Faker $faker) {
    $equipo_id = \App\Equipo::all()->random()->id;

    // jugadores con equipo y sin equipo
    $equipo_id = ($equipo_id % 2 == 0 ? null : $equipo_id);

    return [
        'equipo_id' => $equipo_id,
        'nombre' => $faker->name,
        'estatura' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
    ];
});
