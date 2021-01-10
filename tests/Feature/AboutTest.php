<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase
{

    /** @test */
    public function anybody_can_view_about_page()
    {
       $this->get('/about')
           ->assertSee('Об');
    }
}
