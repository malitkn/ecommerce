<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word,
            'type'  => rand(1,2),
            'code' => 'CODE-' . fake()->word . '-' . rand(1,200),
            'price' => rand(1,100),
            'rate' => rand(1,100),
        ];
    }
}
