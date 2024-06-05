<?php

namespace Database\Factories;

use App\Models\MealItem;
use App\Models\Meal;
use App\Models\FoodItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealItemFactory extends Factory
{
    protected $model = MealItem::class;

    public function definition()
    {
        return [
            'meal_id' => Meal::factory(),
            'food_item_id' => FoodItem::factory(),
            'quantity' => $this->faker->numberBetween(1, 500),
        ];
    }
}
