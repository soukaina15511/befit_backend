<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserPreference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class UserPreferenceController extends Controller
{
    public function index()
    {
        $userPreferences = UserPreference::all();
        return response()->json($userPreferences);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'food_item_id' => 'required|exists:food_items,id',
            'preference' => 'required|in:Like,Dislike,Neutral',
        ]);

        $userPreference = UserPreference::create($request->all());
        return response()->json($userPreference, 201);
    }

    public function show(UserPreference $userPreference)
    {
        return response()->json($userPreference);
    }

    public function update(Request $request, UserPreference $userPreference)
    {
        $request->validate([
            'preference' => 'required|in:Like,Dislike,Neutral',
        ]);

        $userPreference->update($request->all());
        return response()->json($userPreference, 200);
    }

    public function destroy(UserPreference $userPreference)
    {
        $userPreference->delete();
        return response()->json(null, 204);
    }
}
