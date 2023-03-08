<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class CouponFactory extends Factory
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
            'min_basket_price' => rand(1,25),
            'rate' => rand(1,100),
            'quantity' => rand(1,1000),
            'expires_at' => Carbon::now()->addYear()->format('Y-m-d'),
        ];
    }
}
