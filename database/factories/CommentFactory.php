<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => Product::where('status',1)->get()->random()->id,
            'user_id' => User::all('id')->random(),
            'title' => fake()->paragraph(),
            'comment' => fake()->paragraph(5),
            'rate' => rand(1,5),
            'ip_address' => fake()->ipv4(),
            'status' => 1,
        ];
    }
}
