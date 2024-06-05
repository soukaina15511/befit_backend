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
                $meals[] = ['user_id' => $i, 'name' => $meal];
            }
        }

        DB::table('meals')->insert($meals);
    }
}
