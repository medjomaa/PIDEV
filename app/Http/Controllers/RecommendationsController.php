<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RecommendationsController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->except(['index']); // Require users to be authenticated for all actions except viewing recommendations
    }
    public function myMethod()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // The user is logged in
            $userName = Auth::user()->name;
            // Continue with your logic, now safely using $userName
        } else {
            // User is not authenticated, redirect with a message
            return redirect('/registration')->with('error', 'You need to create an account or log in.');
        }
    }

    
    public function index()
    {
        // If you need to pass any additional data to your form, you can query it here
        // For now, it seems we are just displaying the form, so no additional data is fetched
        return view('recommendation_form'); // Make sure this matches the name of your view file
    }

    // Store a newly created or update an existing recommendation in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'age' => 'required|integer|min:12|max:100',
            'sex' => 'required|in:male,female',
            'height' => 'required|numeric|min:100',
            'weight' => 'required|numeric|min:30',
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
            'initial_assessment_results' => 'nullable|string',
            'ongoing_progress' => 'nullable|string',
            'feedback' => 'nullable|string',
        ]);

        $userId = Auth::id(); // Get the currently authenticated user's ID

        $recommendation = Recommendation::updateOrCreate(
            ['user_id' => $userId], // Conditions to match an existing record
            $validatedData // Data to update or create
        );

        if ($recommendation->wasRecentlyCreated) {
            return redirect()->route('recommendations.index')->with('success', 'Recommendation submitted successfully.');
        } else {
            return redirect()->route('recommendations.index')->with('success', 'Recommendation updated successfully.');
        }
    }
}
