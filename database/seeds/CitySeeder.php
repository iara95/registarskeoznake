<?php

use Illuminate\Database\Seeder;
use App\city;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(city::class, 20)->create();
    }
}
