<?php

namespace Tests\Feature;

use App\UselessTest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UselessTestTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUselessTestTest()
    {
        DB::beginDatabaseTransaction();
        $uselessTests = factory(App\UselessTest::class, 3)->create();

        $isOK = UselessTest::find($uselessTests[0]->id) != null
            && UselessTest::find($uselessTests[1]->id) != null
            && UselessTest::find($uselessTests[2]->id) != null;
        DB::rollback();

        $this->assertTrue($isOK);

    }
}
