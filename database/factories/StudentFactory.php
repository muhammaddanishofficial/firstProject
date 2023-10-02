<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'age'=>fake()->numberBetween(18,40),
            'city'=>fake()->city(),
            'phone'=>fake()->phoneNumber(),
            'address'=>fake()->address(),
            'password'=>fake()->password()
        ];
    }
}
