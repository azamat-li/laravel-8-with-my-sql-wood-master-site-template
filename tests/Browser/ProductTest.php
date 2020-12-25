<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductTest extends DuskTestCase
{

    use WithFaker, RefreshDatabase;

    /** @test */
    public function can_visit_products()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/products')
                ->assertSee('проекты');
        });
    }
}
