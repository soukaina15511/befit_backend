<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable , HasFactory ;

    protected $fillable = [
        'userName', 'email', 'password', 'birthday', 'gender', 'height', 'weight', 'objectif','calories_needed'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function preferences()
    {
        return $this->hasMany(UserPreference::class);
    }

    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}