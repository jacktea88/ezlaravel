<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->name,
            'created_at' => '2020-11-03 11:30:28',
            'updated_at' => '2020-11-03 11:30:28'

        ];
    }
}
