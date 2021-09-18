<?php

namespace Tests\Feature;

use Tests\TestCase;

class ValidationTest extends TestCase
{
    public function testValidationWrongEmail()
    {
        $response = $this->post('login', ['email' => 'testemail', 'password' => 'testemail']);
        $response->assertStatus(422);
        $content = $response->getContent();
        $this->assertStringContainsString('email', $content);
    }

    public function testValidationNoPassword()
    {
        $response = $this->post('login', ['email' => 'testemail@example.com']);
        $response->assertStatus(422);
        $content = $response->getContent();
        $this->assertStringContainsString('password', $content);
    }
}
