<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutritionalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nutritionalInfo = [
            // Nutritional information for Apple
            ['food_item_id' => 1, 'calories' => 52, 'protein' => 0.3, 'carbohydrates' => 14, 'fats' => 0.2],
            // Nutritional information for Broccoli
            ['food_item_id' => 2, 'calories' => 50, 'protein' => 2.8, 'carbohydrates' => 9, 'fats' => 0.5],
            // Nutritional information for Chicken Breast
            ['food_item_id' => 3, 'calories' => 165, 'protein' => 31, 'carbohydrates' => 0, 'fats' => 3.6],
            // Nutritional information for Greek Yogurt
            ['food_item_id' => 4, 'calories' => 59, 'protein' => 10, 'carbohydrates' => 3.6, 'fats' => 0],
            // You can add more nutritional information for other food items here
        ];

        DB::table('nutritional_information')->insert($nutritionalInfo);
    }
}
