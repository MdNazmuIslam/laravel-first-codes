<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\student;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *c
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'Name' => fake()->name(),
           'class' => fake()->numberBetween(5 ,15),
           'Subject' => fake()->word(),
           'age' =>fake()->numberBetween(15 ,25),
        ];
    }
}
