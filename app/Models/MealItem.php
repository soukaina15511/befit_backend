<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MealItem extends Model
{
    use HasFactory ;
    protected $fillable = ['meal_id', 'food_item_id', 'quantity'];

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }

    public function foodItem()
    {
        return $this->belongsTo(FoodItem::class);
    }
}
