<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $numberOfUsers = 10; // Set the number of users you want to generate meals for
    $mealsPerUser = ['Breakfast', 'Lunch', 'Dinner']; // Define the meals for each user

    $meals = [];

    for ($i = 1; $i <= $numberOfUsers; $i++) {
        foreach ($mealsPerUser as $meal) {
            // Randomly generate calories for each meal
            $calories = rand(200, 700); // You can adjust the range as needed

            $meals[] = [
                'user_id' => $i,
                'name' => $meal,
                'calories' => $calories, // Add the calories attribute
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
    }

    DB::table('meals')->insert($meals);
}

}
