<?php

namespace database\seeders;

use Illuminate\database\seeder;

class databaseSeeder extends seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorsTableSeeder::class);
    }
}
