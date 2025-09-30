<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_listings_page_loads()
    {
        $response = $this->get('/listings');
        $response->assertStatus(200);
    }

    public function test_register_page_loads()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
}
