<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitySeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(CarSeeder::class);
        
        $this->call(UserSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(PermitSeeder::class);
    }
}
