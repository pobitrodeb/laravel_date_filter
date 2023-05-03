<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'      => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email'     => fake()->unique()->safeEmail(),
            'gender'    => fake()->randomElements(['Male', 'Female'])[(0)],
            'position'   => fake()->randomElements(['CEO', 'COO', 'Business Development', 'Product Manager', 'Web Developer'])[0],
        ];
    }
}
