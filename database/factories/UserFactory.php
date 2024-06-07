<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'userName' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), // Default password
            'birthday' => $this->faker->date('Y-m-d', '2002-12-13'),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'height' => $this->faker->numberBetween(150, 200),
            'weight' => $this->faker->numberBetween(50, 100),
            'objectif' => $this->faker->randomElement(['Lose Weight', 'Gain Weight']),
            'calories_needed'=>$this->faker->numberBetween(500,5000),
            'remember_token' => Str::random(10),
        ];
    }
}
