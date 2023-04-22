<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
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


                'image' => $this->faker->imageUrl(),
                'cat_id' => $this->faker->id,
                'name' => $this->faker->name,
                'stock_id' => $this->faker->word,
                'qty_purchased' => $this->faker->numberBetween(100, 150),
                'qty_in_stock' => $this->faker->numberBetween(10, 50),
                'supplier' => $this->faker->name,
                'unit_price' =>  $this->faker->numberBetween(10, 50),
                'total_amount' =>  $this->faker->numberBetween(200, 170),
                'status' =>  $this->faker->word,





            ];
    }
}
