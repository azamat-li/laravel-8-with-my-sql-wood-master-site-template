<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CareerTest extends DuskTestCase
{
    /** @test */
    public function can_see_careers()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/careers')
                ->assertSee('Вакансии');
        });
    }
}
