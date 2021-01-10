<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FeedbackTest extends DuskTestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function can_access_leave_feedback()
    {

        $email = $this->faker->email;
        $message = $this->faker->sentence;

        $this->browse(function (Browser $browser) use ($email, $message) {
            $browser->visit('/feedback')
                ->assertSee('Обратная связь')
                ->type('email', $email)
                ->type('message', $message)
                ->click('div button')
                ->assertSee('Благодарим');
        });
    }

}
