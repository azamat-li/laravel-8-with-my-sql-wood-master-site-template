<?php

namespace Tests\Unit;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    use RefreshDatabase, WithFaker;


    /** @test */
    public function it_has_a_path()
    {
        $client = Client::factory()->create();

        $this->assertEquals('/clients/'.$client->id, $client->path());

    }


}
