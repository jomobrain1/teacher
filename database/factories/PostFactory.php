<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categoryIDs = Category::pluck('id');

        return [
            'title' => $this->faker->text(20),
            'content' => $this->faker->paragraphs(5, true),
            'category_id' => $categoryIDs->random(),
        ];
    }
}
