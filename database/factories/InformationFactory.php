<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->text(),
           'describtion'=>fake()->text(),
            'image'=> fake()->imageUrl(800,600),
            'from_price'=>fake()->randomNumber(2),
            'to_price'=>fake()->randomNumber(2),
        ];
    }
}
