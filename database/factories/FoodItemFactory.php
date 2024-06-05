<?php

namespace Database\Factories;

use App\Models\FoodItem;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodItemFactory extends Factory
{
    protected $model = FoodItem::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'category_id' => Category::factory(),
        ];
    }
}
