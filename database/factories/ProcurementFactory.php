<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProcurementFactory extends Factory
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



                'item' => $this->faker->word,
                'quantity' =>  $this->faker->numberBetween(10, 150),
                'amount' => $this->faker->numberBetween(10000, 150000),
                'requested_by' => $this->faker->numberBetween(1, 0),
                'sent_to' => $this->faker->numberBetween(2, 5),
                'date' =>  $this->faker->date(now()),
                'status' =>  $this->faker->word("active"),
                'attachment' => $this->faker->imageUrl(),
                'attachment_type' => $this->faker->word,






            ];
    }
}
