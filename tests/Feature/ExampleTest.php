<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUserIsExperienced()
    {
        $user = User::inRandomOrder()->first();

        $this->travel(91)->days();
        $this->assertTrue($user->isExperienced());

        $this->travelBack();
        $this->assertFalse($user->isExperienced());
    }
}
