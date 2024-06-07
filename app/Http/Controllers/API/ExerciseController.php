<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the exercises.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercises = Exercise::all();
        return response()->json($exercises);
    }

    /**
     * Store a newly created exercise in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'muscle_group' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|string|max:255',
            'difficulty' => 'required|string|in:Beginner,Intermediate,Advanced',
            'equipment' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $exercise = Exercise::create($request->all());
        return response()->json($exercise, 201);
    }

    /**
     * Display the specified exercise.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exercise = Exercise::findOrFail($id);
        return response()->json($exercise);
    }

    /**
     * Update the specified exercise in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'muscle_group' => 'string|max:255',
            'description' => 'string',
            'image_url' => 'nullable|string|max:255',
            'difficulty' => 'string|in:Beginner,Intermediate,Advanced',
            'equipment' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $exercise = Exercise::findOrFail($id);
        $exercise->update($request->all());
        return response()->json($exercise, 200);
    }

    /**
     * Remove the specified exercise from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = Exercise::findOrFail($id);
        $exercise->delete();
        return response()->json(null, 204);
    }
}
