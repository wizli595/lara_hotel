<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'checkin' => $this->faker->date(),
            'checkout' => $this->faker->date(),
            'payment_date' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 0, 9999), 
        ];
    }
}
