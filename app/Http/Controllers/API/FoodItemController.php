<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class FoodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodItems = FoodItem::all();
        return response()->json($foodItems);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $foodItem = FoodItem::create($request->all());
        return response()->json($foodItem, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodItem  $foodItem
     * @return \Illuminate\Http\Response
     */
    public function show(FoodItem $foodItem)
    {
        return response()->json($foodItem);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodItem  $foodItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodItem $foodItem)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $foodItem->update($request->all());
        return response()->json($foodItem, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodItem  $foodItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodItem $foodItem)
    {
        $foodItem->delete();
        return response()->json(null, 204);
    }
}
