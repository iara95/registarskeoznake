<?php

use Illuminate\Database\Seeder;
use App\driver;
class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(driver::class, 100)->create();
    }
}
