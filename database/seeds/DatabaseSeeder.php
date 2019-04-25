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
        $this->call("AdministratorSeeder");
        // $this->call(UsersTableSeeder::class);
    }
}
