<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodItem extends Model
{
    use HasFactory ;
    protected $fillable = ['name', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function nutritionalInformation()
    {
        return $this->hasOne(NutritionalInformation::class);
    }

    public function preferences()
    {
        return $this->hasMany(UserPreference::class);
    }

    public function mealItems()
    {
        return $this->hasMany(MealItem::class);
    }
    public function meals()
{
    return $this->belongsToMany(Meal::class);
}
}
