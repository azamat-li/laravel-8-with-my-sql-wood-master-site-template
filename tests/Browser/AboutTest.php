<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AboutTest extends DuskTestCase
{
    /** @test */
    public function can_access_about()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/about')
                ->assertSee('Об');
        });
    }

}
