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
        factory(App\Models\Test::class, 10)->create();
    }

    protected function add() {
        DB::table('tests')->insert([
            'is_enabled' => true,
            'text' => Str::random(10)
        ]);

    }
}
