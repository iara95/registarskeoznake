<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\driver;
use Faker\Generator as Faker;

$factory->define(driver::class, function (Faker $faker) {
    return [
        'oib' => $faker-> numberBetween($min = 10000000000, $max = 90000000000),
        'ime' => $faker-> firstName(),
        'prezime' => $faker-> lastName()
    ];
});
