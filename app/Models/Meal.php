<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meal extends Model
{
    use HasFactory ;
    protected $fillable = ['user_id', 'name', 'calories'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mealItems()
    {
        return $this->hasMany(MealItem::class);
    }
    public function foodItems()
{
    return $this->belongsToMany(FoodItem::class);
}
}
