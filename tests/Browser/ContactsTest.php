<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactsTest extends DuskTestCase
{
    /** @test */
    public function can_see_contacts()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contacts')
                ->assertSee('Контакты')
                ->assertSee('Электронная почта')
                ->assertSee('Адрес')
                ->assertSee('Yandex.Maps');
        });
    }
}
