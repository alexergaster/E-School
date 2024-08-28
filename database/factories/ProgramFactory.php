<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->name(),
            'tag' => $this->faker->randomElement(['python', 'js', 'electronics']),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(1600, 1800),
        ];
    }
}
