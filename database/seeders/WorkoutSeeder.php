<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workout;
use App\Models\Exercise;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
        // Sample data for workouts
        $workouts = [
            [
                'name' => 'Full Body Blast',
                'description' => 'A comprehensive workout targeting all major muscle groups.',
                'duration' => 60,
                'difficulty' => 'Intermediate',
                'muscle_groups' => 'Full Body',
                'image_url' => 'https://example.com/images/full_body_blast.jpg',
                'instructions' => 'Follow the exercises as listed and maintain proper form.',
                'exercises' => [
                    ['name' => 'Push-Up', 'sets' => 3, 'reps' => 15, 'rest_time' => 60],
                    ['name' => 'Squat', 'sets' => 3, 'reps' => 20, 'rest_time' => 60],
                ],
            ],
            [
                'name' => 'Upper Body Strength',
                'description' => 'Focuses on building strength in the upper body.',
                'duration' => 45,
                'difficulty' => 'Advanced',
                'muscle_groups' => 'Upper Body',
                'image_url' => 'https://example.com/images/upper_body_strength.jpg',
                'instructions' => 'Concentrate on the exercises to maximize upper body strength.',
                'exercises' => [
                    ['name' => 'Push-Up', 'sets' => 4, 'reps' => 10, 'rest_time' => 90],
                    ['name' => 'Bicep Curl', 'sets' => 4, 'reps' => 12, 'rest_time' => 60],
                ],
            ],
        ];

        // Insert the sample data into the workouts table and attach exercises
        foreach ($workouts as $workoutData) {
            $workout = Workout::create([
                'name' => $workoutData['name'],
                'description' => $workoutData['description'],
                'duration' => $workoutData['duration'],
                'difficulty' => $workoutData['difficulty'],
                'muscle_groups' => $workoutData['muscle_groups'],
                'image_url' => $workoutData['image_url'],
                'instructions' => $workoutData['instructions'],
            ]);

            foreach ($workoutData['exercises'] as $exerciseData) {
                $exercise = Exercise::where('name', $exerciseData['name'])->first();
                $workout->exercises()->attach($exercise->id, [
                    'sets' => $exerciseData['sets'],
                    'reps' => $exerciseData['reps'],
                    'rest_time' => $exerciseData['rest_time'],
                ]);
            }
        }
    }
}
