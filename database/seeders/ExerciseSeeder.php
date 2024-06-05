<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExerciseSeeder extends Seeder
{
    public function run()
    {
        // Sample data for exercises
        $exercises = [
            [
                'name' => 'Push-Up',
                'muscle_group' => 'Chest',
                'description' => 'A basic push-up exercise.',
                'image_url' => 'https://example.com/images/push_up.jpg',
                'difficulty' => 'Beginner',
                'equipment' => 'None',
            ],
            [
                'name' => 'Squat',
                'muscle_group' => 'Legs',
                'description' => 'A basic squat exercise.',
                'image_url' => 'https://example.com/images/squat.jpg',
                'difficulty' => 'Beginner',
                'equipment' => 'None',
            ],
            [
                'name' => 'Bicep Curl',
                'muscle_group' => 'Arms',
                'description' => 'A basic bicep curl exercise.',
                'image_url' => 'https://example.com/images/bicep_curl.jpg',
                'difficulty' => 'Intermediate',
                'equipment' => 'Dumbbells',
            ],
        ];

        // Insert the sample data into the exercises table
        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }
    }
}
