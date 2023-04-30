<?php

namespace Database\Factories;

use App\Models\DeliveryType;
use App\Models\OrderState;
use App\Models\Profile;
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
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'state_id' => OrderState::get()->random()->id,
            'price' => $this->faker->randomDigit(),
            'arrival_address' => $this->faker->address(),
            'profile_id' => Profile::get()->random()->id,
            'delivery_type_id' => DeliveryType::get()->random()->id
        ];
    }
}
