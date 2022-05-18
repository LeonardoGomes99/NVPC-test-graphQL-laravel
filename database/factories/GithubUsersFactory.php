<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GithubUsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'       => $this->faker->uuid(),
            'name'     => $this->faker->name(),
            'email'    => $this->faker->email(),
            'username' => $this->faker->title(), // password
        ];
    }
}
