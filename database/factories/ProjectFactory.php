<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory

{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return
            [
                'name' => Str::random(10) . " " . Str::random(10),
                'type' => $this->faker->name(),
                'budget' => $this->faker->name(),

                'expenditure' => $this->faker->name(),
                'start_date' =>  now(),
                'end_date' =>  now(),
                'status' => $this->faker->name(),
                'description' => $this->faker->name(),


            ];
    }
}
