<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->paragraph(10),
            'category_id' => Category::where('parent','!=',0)->get()->random()->id,
            'featured_image' => fake()->imageUrl(),
            'slug' => fake()->slug(3),
            'seo_title' => fake()->word(),
            'seo_description' => fake()->paragraph(2),
            'seo_keywords' => fake()->word(),
        ];
    }

}
