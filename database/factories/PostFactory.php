<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'images' => $this->faker->imageUrl(),
            'content' => $this->faker->text(),
            'likes' => random_int(1,200),
            'is_published' => 1,
            'category_id' => Category::get()->random()->id,

        ];
    }
}
