<?php

use Illuminate\Database\Seeder;
use App\permit;

class PermitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(permit::class, 50)->create();

    }
}
