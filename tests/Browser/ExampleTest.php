<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function a_visitor_can_see_company_name()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('ИП Алибаев');
        });
    }
}
