<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\permit;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(permit::class, function (Faker $faker) {
    $tehnickipregled = ['Remetinec', 'Vrbani', 'Split', 'Sisak', 'Dubrovnik'];
    
            
    return [
        'vrijedi_od' =>  $startDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-180 days', '+180 days')->getTimestamp()),
        'vrijedi_do' =>  $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $startDate)->addYear(),
        'tehnicki_pregled' => $tehnickipregled[rand(0, 4)],
        'employee_id' => rand(1, 50),
        'city_id' => rand(1, 20),
        'car_id'=> rand(1, 100)


        
    ];
});
