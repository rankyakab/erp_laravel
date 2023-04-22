<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LogisticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'purpose' =>  $this->faker->word,
            'amount' => $this->faker->numberBetween(10000, 150000),
            'requested_by' => $this->faker->numberBetween(1, 0),
            'sent_to' => $this->faker->numberBetween(2, 5),
            'start_date' =>  $this->faker->date(now()),
            'end_date' =>  $this->faker->date(now()),
            'status' =>  $this->faker->word("active"),

        ];
    }
}
