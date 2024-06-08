<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MealController extends Controller
{
    public function index()
    {
        $meals = Meal::all();
        return response()->json($meals);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required',
            'calories'=>'required|integer',
        ]);

        $meal = Meal::create($request->all());
        return response()->json($meal, 201);
    }

    public function show(Meal $meal)
    {
        return response()->json($meal);
    }

    public function update(Request $request, Meal $meal)
    {
        $request->validate([
            'name' => 'required',
            'calories'=>'required',

        ]);

        $meal->update($request->all());
        return response()->json($meal, 200);
    }

    public function destroy(Meal $meal)
    {
        $meal->delete();
        return response()->json(null, 204);
    }
}
