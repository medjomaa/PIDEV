<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FeedbackController extends Controller
{
    // Method to show the feedback form
    public function showForm()
    {
        return view('feedback_form');
    }
    public function submitFeedback(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'fitness_goal' => 'required|string',
        'workout_duration' => 'required|integer',
        'exercise_type' => 'required|string',
        'health_conditions' => 'required|string',
        'workout_environment' => 'required|string',
        'feedback_text' => 'required|string',
    ]);

    // API URL for sentiment analysis
    $apiUrl = 'http://localhost:5000/analyze';

    // Make a POST request to the sentiment analysis API
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'API-Key' => 'YourExpectedAPIKey', // Add this line if an API key is required
    ])->post('http://127.0.0.1:5000/analyze', ['text' => $request->feedback_text]);
    

    // Process the API response
    if ($response->successful() && isset($response->json()['sentiment'])) {
        $sentimentResult = $response->json()['sentiment'];
    } else {
        // If the API call fails or does not return the expected 'sentiment' key
        $errorStatus = $response->failed() ? $response->status() : 'Unexpected response format';
        $sentimentResult = "Analysis Failed: $errorStatus";
        // Redirect back with an error message
        return back()->with('error', 'Feedback submission failed due to sentiment analysis error: ' . $sentimentResult);
    }

    // Store the data in the Feedback table
    Feedback::create([
        'fitness_goal' => $validatedData['fitness_goal'],
        'workout_duration' => $validatedData['workout_duration'],
        'exercise_type' => $validatedData['exercise_type'],
        'health_conditions' => $validatedData['health_conditions'],
        'workout_environment' => $validatedData['workout_environment'],
        'feedback' => $request->feedback_text, // Use the original text as feedback
        'sentiment' => $sentimentResult,
    ]);

    // Redirect back with a success message and include the sentiment result
    return back()->with([
        'success' => 'Feedback submitted successfully!',
        'sentiment' => 'Sentiment analysis result: ' . $sentimentResult
    ]);
}

}
