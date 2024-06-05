<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NutritionalInformation extends Model
{
    use HasFactory ;
    protected $fillable = ['food_item_id', 'calories', 'protein', 'carbohydrates', 'fats'];

    public function foodItem()
    {
        return $this->belongsTo(FoodItem::class);
    }
}
