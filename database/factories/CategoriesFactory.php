<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($categories_name);
        return [
            'name'=> $categories_name,
            'slug'=> $slug

        ];
    }
}
