<?php

namespace Tests\Feature;

use App\Services\TestBasicService;
use App\Services\TestOne;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyHTTPTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/api/test/');

        $response->assertStatus(200);
    }

    public function testTestCommand()
    {
        $this->artisan('command:test')
            ->expectsOutput('not my first test')
            ->assertExitCode(0);

    }

    public function testGetForMock() {

        $this->mock(TestBasicService::class, function ($mock) {
            $mock->shouldReceive('getForMock')->once()->andReturn('my third test');
        });

        $service = new TestBasicService();
        $result = $service->getForMock('test');
        $this->assertEquals($result, 'test');

    }
}
