<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactsTest extends TestCase
{
    /** @test */
    public function a_user_can_view_contacts()
    {
        $this->get('/contacts')
            ->assertSeeText('Электронная почта')
            ->assertSeeText('Мобильный телефон');
    }
}
