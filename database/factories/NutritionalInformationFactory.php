<?php

namespace Database\Factories;

use App\Models\NutritionalInformation;
use App\Models\FoodItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class NutritionalInformationFactory extends Factory
{
    protected $model = NutritionalInformation::class;

    public function definition()
    {
        return [
            'food_item_id' => FoodItem::factory(),
            'calories' => $this->faker->numberBetween(50, 500),
            'protein' => $this->faker->randomFloat(2, 0, 50),
            'carbohydrates' => $this->faker->randomFloat(2, 0, 100),
            'fats' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
