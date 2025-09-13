<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListingTest extends TestCase
{
    use RefreshDatabase;

    public function test_seller_can_create_listing()
    {
        $seller = User::factory()->create()->assignRole('seller');

        $response = $this->actingAs($seller)->post(route('listings.store'), [
            'title' => 'Test Listing',
            'description' => 'Description',
            'price' => 100,
            'category_id' => Category::factory()->create()->id,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('listings', ['title' => 'Test Listing']);
    }
}
