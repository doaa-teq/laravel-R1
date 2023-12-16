<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_name'=> fake()->company(),
          'dascription'=>fake()->text(),
           'price'=>fake()->randomNumber(2),
           'purchase' => 1,
           'category_id'=>fake()->Numberbetween($min=1,$max=2),
        ];
    }
}
