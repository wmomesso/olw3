<?php

namespace Database\Factories;

use App\Enums\OrderStatusEnum;
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
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'session_id' => fake()->uuid(),
            'total' => fake()->randomFloat(2, 0, 100),
            'status' => fake()->randomElement([OrderStatusEnum::CART, OrderStatusEnum::PENDING, OrderStatusEnum::PAID, OrderStatusEnum::CANCELED, OrderStatusEnum::REJECTED]),
        ];
    }
}
