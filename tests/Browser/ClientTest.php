<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use ReflectionException;
use Tests\DuskTestCase;
use Throwable;

class ClientTest extends DuskTestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_visitor_can_see_clients()
    {
        $client = $this->an_admin_can_create_a_client();
        $name = $client[0];
        $about = $client[1];

        $this->browse(function (Browser $browser) use ($name, $about) {
            $browser->visit('/clients')
                ->assertSee('Клиенты')
                ->assertSee($name)
                ->assertSee($about);
        });
    }

    /** @test
     * @expectedException ReflectionException
     * @expectedException Throwable
     */
    public function an_admin_can_create_a_client()
    {
        $name = $this->faker->name();
        $about = $this->faker->sentence();
        $this->browse(function (Browser $browser) use ($name, $about) {
            $browser->visit('/clients')
                ->assertSee('Клиенты')
                ->clickLink('Добавить Клиента')
                ->assertSee('Имя Клиента')
                ->type('name', $name)
                ->type('about', $about)
                ->click('button[type="submit"]')
                ->assertSee('Клиенты');
        });

        return [$name, $about];
    }

    /** @test */
    public function an_admin_can_delete_client()
    {
        $client = $this->an_admin_can_create_a_client();
        $name = $client[0];
        $about = $client[1];

        $this->browse(function (Browser $browser) use ($name, $about) {
            $browser->visit('/clients')
                ->assertSee('Клиенты')
                ->assertSee($name)
                ->assertSee($about)
                ->assertSee("О Клиенте {$name}")
                ->clickLink("О Клиенте {$name}")
                ->click('button[type="submit"]')
                ->assertSee('Клиенты')
                ->assertDontSee($name)
                ->assertDontSee($about);
        });
    }

    /** @test */
    public function an_admin_can_update_client()
    {
        $client = $this->an_admin_can_create_a_client();
        $name = $client[0];
        $new_name = $this->faker->name;
        $new_about = $this->faker->sentence;

        $this->browse(function (Browser $browser) use ($name, $new_name, $new_about) {
            $browser->visit('/clients')
                ->clickLink("О Клиенте {$name}")
                ->click('#update')
                ->type('name', $new_name)
                ->type('about', $new_about)
                ->click('button[type="submit"]')
                ->assertSee("Клиенты")
                ->assertSee($new_name)
                ->assertSee($new_about);
        });
    }


}
