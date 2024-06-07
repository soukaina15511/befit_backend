<?php 
namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'birthday' => 'required|date',
        'gender' => 'required|in:Male,Female,Other',
        'height' => 'required|integer',
        'weight' => 'required|integer',
        'objectif' => 'required|in:Lose Weight,Gain Weight',
        'calories_needed'=>'required|float',
    ]);

    $user = User::create([
        'userName' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'birthday' => $request->birthday,
        'gender' => $request->gender,
        'height' => $request->height,
        'weight' => $request->weight,
        'objectif' => $request->objectif,
    ]);

    return response()->json($user, 201);
}


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = $request->user();
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out'], 200);
    }
}
