<?php 
use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ExerciseController;
use App\Http\Controllers\API\FoodItemController;
use App\Http\Controllers\API\MealController;
use App\Http\Controllers\API\MealItemController;
use App\Http\Controllers\API\NutritionalInformationController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\UserPreferenceController;
use App\Http\Controllers\API\WorkoutController;
use App\Http\Controllers\API\ObjectifController;
use App\Models\FoodItem;

// Routes requiring authentication via Sanctum
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::apiResource('users', UserController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('exercises', ExerciseController::class);
    Route::apiResource('fooditems', FoodItemController::class);
    Route::apiResource('mealitems', MealItemController::class);
    Route::apiResource('meals', MealController::class);
    Route::apiResource('nutritionalsinformation', NutritionalInformationController::class);
    Route::apiResource('user-preferences', UserPreferenceController::class); // Updated route name
    Route::apiResource('workouts', WorkoutController::class);
    Route::post('/calculate-calories', [ObjectifController::class, 'calculateCalories']);
});

// Public routes
// Add any public routes if needed
