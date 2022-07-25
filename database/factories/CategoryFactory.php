<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_name = $this->faker->sentence(1);
        return [
            'name_az' => $category_name,
            'name_ru' => $this->faker->sentence(1),
            'name_en' => $this->faker->sentence(1),
            'photo' => 'images/products/default-product-image.png',
            'icon' => 'images/products/default-product-image.png',
            'slug' => Str::slug($category_name),
        ];
    }
}
