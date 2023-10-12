<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName(),
            'fullname' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => bcrypt('12345'),
            'address' => $this->faker->address(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'birthdate' => $this->faker->date(),
            'agama' => $this->faker->word(),
            'gender' => mt_rand(0,1),
        ];
    }
}
