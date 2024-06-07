<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MealItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class MealItemController extends Controller
{
    public function index()
    {
        $mealItems = MealItem::all();
        return response()->json($mealItems);
    }

    public function store(Request $request)
    {
        $request->validate([
            'meal_id' => 'required|exists:meals,id',
            'food_item_id' => 'required|exists:food_items,id',
            'quantity' => 'required|integer|min:0',
        ]);

        $mealItem = MealItem::create($request->all());
        return response()->json($mealItem, 201);
    }

    public function show(MealItem $mealItem)
    {
        return response()->json($mealItem);
    }

    public function update(Request $request, MealItem $mealItem)
    {
        $request->validate([
            'quantity' => 'required|integer|min:0',
        ]);

        $mealItem->update($request->all());
        return response()->json($mealItem, 200);
    }

    public function destroy(MealItem $mealItem)
    {
        $mealItem->delete();
        return response()->json(null, 204);
    }
}
