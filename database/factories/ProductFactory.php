<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = rtrim($this->faker->sentence(2), '.');
        return [
            'name' => $product_name,
            'slug' => Str::slug($product_name),
            'cost' => mt_rand(100,1000) / 10,
            'stock' => mt_rand(100,1000),
            'discount' => 0,
            'price' => mt_rand(100,1000) / 10,
            'photo' => 'images/products/default-product-image.png',
            'hover_photo' => 'images/products/default-product-image.png',
            'category_id' => mt_rand(1,10),
        ];
    }
}
