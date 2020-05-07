<?php

use Illuminate\Database\Seeder;
use App\user;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(user::class, 50)->create();
    }
}
