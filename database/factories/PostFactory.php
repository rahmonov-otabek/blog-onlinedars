<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = Category::inRandomorder()->first();

        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph(60), 
            'category_id' => $category->id,
        ];
    }
}
