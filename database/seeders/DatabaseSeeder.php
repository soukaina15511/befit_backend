<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            FoodItemSeeder::class,
            NutritionalInformationSeeder::class,
            UserPreferenceSeeder::class,
            MealSeeder::class,
            MealItemSeeder::class,
            ExerciseSeeder::class,
            WorkoutSeeder::class,
        ]);
    }
}
