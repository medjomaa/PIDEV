<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RecommendationsController extends Controller
{
    public function index()
    {
        // Fetch all recommendations
        $recommendations = Recommendation::all();
        // Assuming you have a Blade view named "recommendations_list.blade.php" to display the list
        return view('recommendations_list', compact('recommendations'));
    }

    public function showForm()
    {
        // Display the recommendation form
        return view('recommendation_form');
    }

    public function submitRecommendation(Request $request)
    {
        Log::info('Recommendation form submission received', $request->all());
        
        // Include all new fields in the validation
        $validatedData = $request->validate([
            'age' => 'required|integer|min:12|max:100',
            'sex' => 'required|in:male,female',
            'height' => 'required|numeric|min:100', // Assuming height in centimeters
            'weight' => 'required|numeric|min:30', // Assuming weight in kilograms
            'fitness_goal' => 'required|string',
            'specific_targets' => 'nullable|string',
            'exercise_frequency' => 'required|string|in:daily,several-times-week,rarely',
            'current_exercise_types' => 'nullable|string',
            'fitness_challenges' => 'nullable|string',
            'past_injuries' => 'nullable|string',
            'medical_conditions' => 'nullable|string',
            'medications' => 'nullable|string',
            'allergies' => 'nullable|string',
            'preferred_exercise_types' => 'nullable|string',
            'available_equipment' => 'nullable|string',
            'time_availability' => 'required|string',
            'dietary_preferences' => 'nullable|string',
            'initial_assessment_results' => 'nullable|string', // Consider specific fields if you have structured assessments
            'ongoing_progress' => 'nullable|string', // This could be a JSON field to capture various progress metrics over time
            'feedback' => 'nullable|string',
            // 'user_id' => 'required|exists:users,id', // Validate that the user_id exists in the users table
        ]);
        

        try {
            $recommendation = Recommendation::create($validatedData);
            Log::info('New recommendation created successfully', ['recommendation_id' => $recommendation->id]);
            return back()->with('success', 'Your recommendation has been submitted successfully!');
        }  catch (\Exception $e) {
            Log::error('Error creating recommendation: ' . $e->getMessage());
            return back()->with('error', 'An error occurred: ' . $e->getMessage())->withInput();
        }
        
    }

   
}
