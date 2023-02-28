<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Sku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sku_id' => Sku::all('id')->random(),
            'order_id' => Order::all('id')->random(),
            'price' => rand(1,100),
            'amount' => rand(1,100),
        ];
    }
}
