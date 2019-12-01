<?php

use Illuminate\Database\Seeder;
use database\seeds\TestsTableSeeder as TestsTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TestsTableSeeder::class); //это говно так и не заработало
        //и \laragon\bin\composer dump-autoload не помог
        //помог только php artisan db:seed --class=TestsTableSeeder но тольько после предыдущего
    }
}
