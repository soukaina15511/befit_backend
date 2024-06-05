<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userPreferences = [
            // User 1 preferences
            ['user_id' => 1, 'food_item_id' => 1, 'preference' => 'Like'],
            ['user_id' => 1, 'food_item_id' => 3, 'preference' => 'Dislike'],
            // User 2 preferences
            ['user_id' => 2, 'food_item_id' => 2, 'preference' => 'Like'],
            ['user_id' => 2, 'food_item_id' => 4, 'preference' => 'Like'],
            // You can add more user preferences here
        ];

        DB::table('user_preferences')->insert($userPreferences);
    }
}
