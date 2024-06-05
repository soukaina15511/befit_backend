<?php

namespace Database\Factories;

use App\Models\UserPreference;
use App\Models\User;
use App\Models\FoodItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserPreferenceFactory extends Factory
{
    protected $model = UserPreference::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'food_item_id' => FoodItem::factory(),
            'preference' => $this->faker->randomElement(['Like', 'Dislike', 'Neutral']),
        ];
    }
}
