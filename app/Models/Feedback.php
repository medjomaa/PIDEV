<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{ 
    protected $fillable = [
        'fitness_goal', 'workout_duration', 'exercise_type', 
        'health_conditions', 'workout_environment', 'feedback', 'sentiment',
    ];

    public $timestamps = false;
}
