<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    // Define the table if it's not the pluralized form of the model name
    protected $table = 'feedback';

    // Specify the fields that can be filled through mass assignment
    protected $fillable = [
        'cleanliness',
        'equipment_quality',
        'staff',
        'classes',
        'safety_measures',
        'membership_fees',
        'atmosphere',
        'additional_amenities',
        'feedback_text',
        'sentiment', // Make sure to include this
    ];
    

    // Cast attributes to native types
    protected $casts = [
        'safety_measures' => 'array',
        'additional_amenities' => 'array',
    ];
}
