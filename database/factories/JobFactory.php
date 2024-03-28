<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $salary = rand(40000, 300000);
        return [
            'title' => fake()->jobTitle(),
            'salary' => $salary
        ];
    }

    public function globalTitle():static
    {
        return $this->state(fn (array $attributes) => [
            'title' => 'PROGRAMMER',
        ]);
    }
}
