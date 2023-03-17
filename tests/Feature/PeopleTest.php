<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\People;
class PeopleTest extends TestCase
{
    use WithoutMiddleware;

    use RefreshDatabase;
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
        
        $people = People::factory()->make();

        $response = $this->post('/people/create', [
            'name' =>  $people->name,   
            'last_name' => $people->last_name,
        ]);


        $response->assertStatus(302);

    }

    public function test_that_people_edit_page_is_working_with_put() : void
    {
        
        $people = People::factory()->make();

        $people->name = 'John';
        $people->last_name = 'Doe';

        $people->save();

        $this->assertDatabaseHas('people', [
            'name' => $people->name,
            'last_name' => $people->last_name,
        ]);

    }

    public function test_that_people_delete_page_is_working(): void
    {
        $people = People::factory()->make();

        $people->delete();
        
        $this->assertModelMissing($people);
    }

    public function test_that_people_filter_is_working(): void
    {
        $response = $this->get('/?name=John');

        $response->assertStatus(200);
    }


}
