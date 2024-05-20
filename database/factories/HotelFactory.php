<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namehotel' => $this->faker->word,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'cph' => $this->faker->postcode,
            'stars' => $this->faker->randomDigitNotNull,
        ];
    }
}
