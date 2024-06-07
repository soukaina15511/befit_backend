<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\NutritionalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NutritionalInformationController extends Controller
{
    public function index()
    {
        $nutritionalInfo = NutritionalInformation::all();
        return response()->json($nutritionalInfo);
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_item_id' => 'required|exists:food_items,id',
            'calories' => 'required|integer|min:0',
            'protein' => 'required|numeric|min:0',
            'carbohydrates' => 'required|numeric|min:0',
            'fats' => 'required|numeric|min:0',
        ]);

        $nutritionalInfo = NutritionalInformation::create($request->all());
        return response()->json($nutritionalInfo, 201);
    }

    public function show(NutritionalInformation $nutritionalInfo)
    {
        return response()->json($nutritionalInfo);
    }

    public function update(Request $request, NutritionalInformation $nutritionalInfo)
    {
        $request->validate([
            'calories' => 'required|integer|min:0',
            'protein' => 'required|numeric|min:0',
            'carbohydrates' => 'required|numeric|min:0',
            'fats' => 'required|numeric|min:0',
        ]);

        $nutritionalInfo->update($request->all());
        return response()->json($nutritionalInfo, 200);
    }

    public function destroy(NutritionalInformation $nutritionalInfo)
    {
        $nutritionalInfo->delete();
        return response()->json(null, 204);
    }
}
