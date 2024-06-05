<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mealItems = [
            // Meal 1 items
            ['meal_id' => 1, 'food_item_id' => 1, 'quantity' => 200],
            ['meal_id' => 1, 'food_item_id' => 2, 'quantity' => 150],
            // Meal 2 items
            ['meal_id' => 2, 'food_item_id' => 3, 'quantity' => 250],
            ['meal_id' => 2, 'food_item_id' => 4, 'quantity' => 100],
            // Additional meal items
            ['meal_id' => 3, 'food_item_id' => 1, 'quantity' => 100],
            ['meal_id' => 3, 'food_item_id' => 5, 'quantity' => 300],
            ['meal_id' => 4, 'food_item_id' => 2, 'quantity' => 200],
            ['meal_id' => 4, 'food_item_id' => 3, 'quantity' => 150],
            // More meal items
            ['meal_id' => 5, 'food_item_id' => 4, 'quantity' => 120],
            ['meal_id' => 5, 'food_item_id' => 6, 'quantity' => 180],
            ['meal_id' => 6, 'food_item_id' => 1, 'quantity' => 220],
            ['meal_id' => 6, 'food_item_id' => 3, 'quantity' => 200],
            // Continuing to add more meal items
            ['meal_id' => 7, 'food_item_id' => 2, 'quantity' => 180],
            ['meal_id' => 7, 'food_item_id' => 4, 'quantity' => 220],
            ['meal_id' => 8, 'food_item_id' => 1, 'quantity' => 180],
            ['meal_id' => 8, 'food_item_id' => 6, 'quantity' => 250],
            // More meal items
            ['meal_id' => 9, 'food_item_id' => 3, 'quantity' => 150],
            ['meal_id' => 9, 'food_item_id' => 5, 'quantity' => 200],
            ['meal_id' => 10, 'food_item_id' => 2, 'quantity' => 200],
            ['meal_id' => 10, 'food_item_id' => 4, 'quantity' => 150],
            // More meal items
            ['meal_id' => 11, 'food_item_id' => 1, 'quantity' => 100],
            ['meal_id' => 11, 'food_item_id' => 2, 'quantity' => 300],
            ['meal_id' => 12, 'food_item_id' => 3, 'quantity' => 180],
            ['meal_id' => 12, 'food_item_id' => 4, 'quantity' => 250],
            // Add more meal items here
        ];
        

        DB::table('meal_items')->insert($mealItems);
    }
}
