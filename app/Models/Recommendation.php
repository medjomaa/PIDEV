<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    // Define the table if it's not the pluralized form of the model name
    protected $table = 'recommendations';

    // Specify the fields that can be filled through mass assignment
    protected $fillable = [
        'age',
        'sex',
        'height',
        'weight',
        'fitness_goal',
        'specific_targets',
        'exercise_frequency',
        'current_exercise_types',
        'fitness_challenges',
        'past_injuries',
        'medical_conditions',
        'medications',
        'allergies',
        'preferred_exercise_types',
        'available_equipment',
        'time_availability',
        'dietary_preferences',
        'initial_assessment_results',
        'ongoing_progress',
        'feedback',
        // 'user_id', // Ensure this is included if you're linking recommendations to users
    ];

    // Define the relationship with the User model, assuming each recommendation is associated with a user
    // public function user()
    // {
    //     return $this->belongsTo(User::class); // Ensure User model exists and is properly namespaced
    // }
}
