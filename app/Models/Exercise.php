<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'muscle_group', 'description', 'image_url', 'difficulty', 'equipment'];

    public function workouts()
    {
        return $this->belongsToMany(Workout::class)->withPivot('sets', 'reps', 'rest_time')->withTimestamps();
    }
}
