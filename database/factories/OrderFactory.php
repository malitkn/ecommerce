<?php

namespace Database\Factories;

use App\Models\Coupon;
use App\Models\OrderStatus;
use App\Models\Payment;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'shipment_id' => Shipment::all('id')->random(),
            'payment_id' => Payment::all('id')->random(),
            'order_status_id' => OrderStatus::all('id')->random(),
            'discount_id' => Coupon::all('id')->random(),
            'shipping_address' => fake()->address,
            'invoice_address' => fake()->address,
            'shipment_price' => rand(1,30),
        ];
    }
}
