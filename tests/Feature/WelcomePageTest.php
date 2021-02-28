<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomePageTest extends TestCase
{
    public function test_welcome_page_can_be_rendered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
