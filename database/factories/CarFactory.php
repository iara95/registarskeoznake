<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

//$faker = (new \Faker\Factory())::create();
//$faker->addProvider(new \Faker\Provider\Fakecar($faker));


$factory->define(Car::class, function (Faker $faker) {
    $types = ['Osobno', 'Teretno', 'Motocikl'];
    $marke = ['BMW', 'Mercedes', 'Audi', 'Ferarri'];
    $regGrad = ['SB', 'ZG', 'ST', 'PU'];
    $models = ['A6', 'S-klassa', '488', '530d'];
    $regSlova = ['TG', 'DK', 'IA', 'AS'];
    return [
       'tip_vozila' => $types[rand(0, 2)],
       'marka' => $marke[rand(0, 2)],
       'model' => $models[rand(0, 3)],
       'godina_proizvodnje' => $faker->dateTime(),
       'osig_kuca' => $faker->word,
       'broj_police' => rand(100000, 9999999),
       'reg_oznaka' => $regGrad[rand(0, 3)] . '-' . rand(1000, 9999) . '-' . $regSlova[rand(0, 3)],
       'driver_id' => rand(1, 100) 
       //'reg_oznake' => $faker->vehicleRegistration('[A-Z]{2}-[0-9]{4}')


        ];
});
