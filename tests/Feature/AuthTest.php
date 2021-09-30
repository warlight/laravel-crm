<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use WithFaker, DatabaseTransactions;

    protected $user;
    protected $password;

    protected function setUp(): void
    {
        parent::setUp();

        $this->password = $this->faker->password;
        $this->user = User::factory()->create(['password' => bcrypt($this->password)]);
    }

    protected function attemptToLogin($password)
    {
        return $this->post('login', [
            'email' => $this->user->email,
            'password' => $password
        ]);
    }

    public function testAuth()
    {
        $response = $this->attemptToLogin($this->password);
        $response->assertStatus(200);

        $response = $this->get('home');
        $response->assertStatus(200);

        $response = $this->get('logout');
        $response->assertStatus(200);

        $response = $this->get('home');
        $response->assertStatus(301);
    }

    public function testAuthFailed()
    {
        $response = $this->attemptToLogin($this->password . '7');
        $response->assertStatus(301);

        $response = $this->get('home');
        $response->assertStatus(301);
    }

    public function testRolesAuth()
    {
        $response = $this->attemptToLogin($this->password . '7');
        $response->assertStatus(301);

        $response = $this->get('home');
        $response->assertStatus(301);
    }
}
