<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class UserPreference extends Model
{
    use HasFactory ;
    protected $fillable = ['user_id', 'food_item_id', 'preference'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function foodItem()
    {
        return $this->belongsTo(FoodItem::class);
    }
}
