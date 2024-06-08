<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\FoodItem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class CaloryController extends Controller
{
    
// Example function to add a food item to a meal
public function addFoodItemToMeal($mealId, $foodItemId)
{
    $meal = Meal::find($mealId);
    $foodItem = FoodItem::find($foodItemId);

    // Assuming there's a many-to-many relationship between meals and food items
    $meal->foodItems()->attach($foodItem);

    // Update the meal's calories
    $meal->calories += $foodItem->calories;
    $meal->save();
}

}
