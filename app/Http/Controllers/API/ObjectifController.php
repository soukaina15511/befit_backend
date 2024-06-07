<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ObjectifController extends Controller
{
    /**
     * Calculate daily caloric needs based on user details and goal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function calculateCalories(Request $request)
    {
        $request->validate([
            'gender' => 'required|in:Male,Female',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'age' => 'required|integer',
            'objectif' => 'required|in:Lose Weight,Gain Weight,Maintain Weight',
        ]);

        $gender = $request->gender;
        $weight = $request->weight;
        $height = $request->height;
        $age = $request->age;
        $objectif = $request->objectif;

        // Calculate Basal Metabolic Rate (BMR)
        if ($gender == 'Male') {
            $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
        } else {
            $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
        } 

        // Adjust BMR based on the user's goal
        if ($objectif == 'Lose Weight') {
            $calories_needed = $bmr - 500; // To lose weight, reduce 500 calories per day
        } elseif ($objectif == 'Gain Weight') {
            $calories_needed = $bmr + 500; // To gain weight, add 500 calories per day
        } else {
            $calories_needed = $bmr; // Maintain weight
        }

        return response()->json([
            'calories_needed' => $calories_needed
        ]);
    }
}
