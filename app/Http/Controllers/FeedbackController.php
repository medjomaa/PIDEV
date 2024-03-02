<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function __construct()
    {
        // Require users to be authenticated for all actions except viewing the feedback form
        $this->middleware('auth')->except(['index']);
    }

    public function index(Feedback $feedback = null)
    {
        // Display the feedback form, passing an existing feedback instance if available
        return view('feedback_form', compact('feedback'));
    }

    public function submitFeedback(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'cleanliness' => 'required|string',
        'equipment_quality' => 'required|string',
        'staff' => 'required|string',
        'classes' => 'required|string',
        'safety_measures' => 'nullable|array',
        'safety_measures.*' => 'string',
        'membership_fees' => 'required|string',
        'atmosphere' => 'required|string',
        'additional_amenities' => 'nullable|array',
        'additional_amenities.*' => 'string',
        'feedback_text' => 'required|string',
    ]);

    // Get the authenticated user's ID
    $userId = Auth::id();

    // API URL for sentiment analysis
    $apiUrl = 'http://localhost:5000/analyze';

    // Make a POST request to the sentiment analysis API
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'API-Key' => 'YourExpectedAPIKey',
    ])->post('http://127.0.0.1:5000/analyze', ['text' => $request->feedback_text]);

    // Process the API response
    if ($response->successful() && isset($response->json()['sentiment'])) {
        $sentimentResult = $response->json()['sentiment'];
    } else {
        // Handle API call failure or unexpected response format
        $errorStatus = $response->failed() ? $response->status() : 'Unexpected response format';
        return back()->with('error', 'Feedback submission failed due to sentiment analysis error: ' . $errorStatus);
    }

    // Prepare data for saving or updating
    $feedbackData = $validatedData;
    $feedbackData['safety_measures'] = json_encode($validatedData['safety_measures'] ?? []);
    $feedbackData['additional_amenities'] = json_encode($validatedData['additional_amenities'] ?? []);
    $feedbackData['sentiment'] = $sentimentResult;
    $feedbackData['user_id'] = $userId; // Include the user_id in the feedback data

    // Check if the user has existing feedback, update it if exists, or create a new one
    $feedback = Feedback::updateOrCreate(
        ['user_id' => $userId], // Check for existing feedback by user_id
        $feedbackData // Data to update or create
    );

    // Determine the appropriate success message
    $message = $feedback->wasRecentlyCreated ? 'Feedback submitted successfully!' : 'Feedback updated successfully!';

    // Redirect back with a success message
    return back()->with('success', $message);
}

}
