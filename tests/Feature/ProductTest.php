<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_view_product()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $this->get('/products/' . $product->id)
            ->assertSee($product->name)
            ->assertSee($product->description);

    }
}
