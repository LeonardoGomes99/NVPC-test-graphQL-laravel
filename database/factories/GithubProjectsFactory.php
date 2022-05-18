<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GithubProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'           => $this->faker->uuid(),
            'user_id'      => $this->faker->uuid(),
            'project_name' => $this->faker->slug(),
            'languages'    => $this->faker->lastName(),
        ];
    }
}
