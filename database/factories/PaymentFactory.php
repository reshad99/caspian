<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname'       => $this->faker->name(),
            'email'          => $this->faker->email(),
            'phone'          => $this->faker->tollFreePhoneNumber(),
            'post_code'      => $this->faker->postcode(),
            'country'        => $this->faker->country(),
            'city'           => $this->faker->city(),
            'card_no'        => $this->faker->creditCardNumber(),
            'address'        => $this->faker->address(),
            'expire'         => '03/24',
            'cvv'            => 308,
            'total_price'    => mt_rand(1,100000) / 10,
            'payment_method'    => $this->faker->creditCardType(),
        ];
    }
}
