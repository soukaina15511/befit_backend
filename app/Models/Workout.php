<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = ['name', 'description', 'duration', 'difficulty', 'muscle_groups', 'image_url', 'instructions'];

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class)->withPivot('sets', 'reps', 'rest_time')->withTimestamps();
    }
}
