<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all('id')->random(),
            'title' => fake()->word,
            'name' => fake()->firstName,
            'surname' => fake()->lastName,
            'phone' => fake()->e164PhoneNumber,
            'city' => fake()->city,
            'county' => fake()->citySuffix,
            'neighborhood' => fake()->streetName,
            'address' => fake()->address,
        ];
    }
}
