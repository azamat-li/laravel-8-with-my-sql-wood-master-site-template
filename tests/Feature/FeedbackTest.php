<?php

namespace Tests\Feature;

use App\Models\Feedback;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_leave_feedback()
    {
        $this->withoutExceptionHandling();

        $this->get('/feedback')
            ->assertSee('Обратная связь');

        $attrs = Feedback::factory()->raw();

        $this->post('/feedback', $attrs)
            ->assertRedirect('/feedback');

        $this->get('/feedback')
            ->assertSee('Благодарим за обратную связь!');

        $this->get('/feedback')
            ->assertDontSee('Благодарим за обратную связь!');
    }


    /** @test */
    public function a_feedback_requires_email()
    {
        $attrs = Feedback::factory()->raw([ 'email' => '' ]);
        $this->post('/feedback', $attrs)->assertSessionHasErrors('email');
    }

    /** @test */
    public function a_feedback_requires_message()
    {
        $attrs = Feedback::factory()->raw([ 'message' => '' ]);
        $this->post('/feedback', $attrs)->assertSessionHasErrors('message');
    }

    /** @test */
    public function a_feedback_requires_correct_email()
    {
        $not_email = $this->faker->firstName;
        $attrs = Feedback::factory()->raw([ 'email' => $not_email  ]);
        $this->post('/feedback', $attrs)->assertSessionHasErrors('email');
}
}
