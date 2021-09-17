<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class AuthTest extends TestCase
{
    public function testAuth()
    {
        $password = 123456;
        $user = User::factory()->create(['password' => bcrypt($password)]);

        $response = $this->post('login', ['email' => $user->email, 'password' => $password]);
        $response->assertStatus(200);

        $response = $this->get('roles');
        $response->assertStatus(200);

        $response = $this->get('logout');
        $response->assertStatus(200);

        $response = $this->get('roles');
        $response->assertStatus(301);
    }

    public function testAuthFailed()
    {
        $password = 123456;
        $user = User::factory()->create(['password' => bcrypt($password)]);

        $response = $this->post('login', ['email' => $user->email, 'password' => $password . '7']);
        $response->assertStatus(301);

        $response = $this->get('roles');
        $response->assertStatus(301);
    }

    public function testRolesAuth()
    {
        $password = 123456;
        $user = User::factory()->create(['password' => bcrypt($password)]);

        $response = $this->post('login', ['email' => $user->email, 'password' => $password . '7']);
        $response->assertStatus(301);

        $response = $this->post('roles');
        $response->assertStatus(301);
    }
}
