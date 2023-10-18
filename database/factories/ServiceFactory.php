<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3,true),
            'description' => fake()->paragraph(7),
            'type_id' => fake()->numberBetween(1,3),
            'images' => fake()->imageUrl(590,300,'beauty'),
        ];
    }
}
