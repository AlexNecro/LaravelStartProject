<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++)
            $this->add();
    }

    protected function add() {
        DB::table('tests')->insert([
            'is_enabled' => true,
            'text' => Str::random(10)
        ]);

    }
}
