<?php

namespace Tests\Feature;

use App\Models\Career;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CareerTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_view_careers()
    {
        $careers = Career::factory(4)->create();
        $this->get('/careers')
            ->assertSee($careers[0]->name)
            ->assertSee($careers[1]->field)
            ->assertSee($careers[2]->description)
            ->assertSee($careers[3]->name);
    }

    /** @test */
    public function a_user_can_view_career()
    {
        $this->withoutExceptionHandling();

        $career = Career::factory()->create();

        $this->get('/careers/' . $career->id)
            ->assertSee($career->name)
            ->assertSee($career->description)
            ->assertSee($career->field);
    }
}
