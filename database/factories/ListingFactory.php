<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Listing;
use App\Models\User;
use App\Models\Category;

class ListingFactory extends Factory
{
    protected $model = Listing::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'preview_image' => $this->faker->imageUrl(),
            'file_path' => 'files/demo.zip',
            'is_active' => true,
        ];
    }
}
