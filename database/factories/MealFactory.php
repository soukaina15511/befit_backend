<?php

namespace Database\Factories;

use App\Models\Meal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    protected $model = Meal::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->word,
            'calories'=>$this->faker->numberBetween(500 , 5000),
        ];
    }
}
