<?php

namespace Tests\Feature;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientsTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function admin_can_add_a_client()
    {
        $this->withoutExceptionHandling();
        $attrs = [
            'name' => $this->faker->firstNameMale,
            'about' => $this->faker->sentence
        ];
        $this->post('/clients', $attrs)->assertRedirect('/clients');
        $this->assertDatabaseHas('clients', $attrs);

        $this->get('/clients')->assertSee($attrs['name']);
    }

    /** @test */
    public function a_client_requires_name()
    {
        $attrs = Client::factory()->raw(['name' => '']);

        $this->post('/clients', $attrs)->assertSessionHasErrors('name');
    }


    /** @test */
    public function a_client_requires_about()
    {
        $attrs = Client::factory()->raw(['about' => '']);

        $this->post('/clients', $attrs)->assertSessionHasErrors('about');
    }


    /** @test */
    public function a_user_can_view_client()
    {
        $this->withoutExceptionHandling();
        $client = Client::factory()->create();

        $this->get($client->path())
            ->assertSee($client->name)
            ->assertSee($client->about);
    }
}
