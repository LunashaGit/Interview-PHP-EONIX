<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
class PeopleTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     */

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_that_people_index_page_is_working(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_that_people_create_page_is_working(): void
    {
        $response = $this->get('/people/create');

        $response->assertStatus(200);
    }

    public function test_that_people_create_page_is_working_with_post() : void
    {
        $response = $this->post('/people/create', [
            'name' => 'John',
            'last_name' => 'Doe',
        ]);

        $response->assertStatus(302);

    }

    public function test_that_people_filter_is_working(): void
    {
        $response = $this->get('/?name=John');

        $response->assertStatus(200);
    }


}
