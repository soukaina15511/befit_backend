<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = Workout::all();
        return response()->json($workouts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'difficulty' => 'required|in:beginner,intermediate,advanced',
        ]);

        $workout = Workout::create($request->all());
        return response()->json($workout, 201);
    }

    public function show(Workout $workout)
    {
        return response()->json($workout);
    }

    public function update(Request $request, Workout $workout)
    {
        $request->validate([
            'difficulty' => 'required|in:beginner,intermediate,advanced',
        ]);

        $workout->update($request->all());
        return response()->json($workout, 200);
    }

    public function destroy(Workout $workout)
    {
        $workout->delete();
        return response()->json(null, 204);
    }
}
