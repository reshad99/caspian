<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SoldProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => mt_rand(1,50),
            'payment_id' => mt_rand(1,20),
            'amount' => mt_rand(1,5),
        ];
    }
}
