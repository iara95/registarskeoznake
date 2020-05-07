<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\employee;
use Faker\Generator as Faker;

$factory->define(employee::class, function (Faker $faker) {
    return [
        'ime' => $faker-> firstName(),
        'prezime' => $faker-> lastName(),
        'oib' => $faker-> numberBetween($min = 10000000000, $max = 90000000000),
        'user_id' => rand(1, 50)
    ];
});
