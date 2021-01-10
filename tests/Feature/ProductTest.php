<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function an_admin_can_view_product()
    {
        $this->withoutExceptionHandling();
        $product = Product::factory()->create();

        $this->get('/products/' . $product->id)
            ->assertSee($product->name)
            ->assertSee($product->description);

    }
}
