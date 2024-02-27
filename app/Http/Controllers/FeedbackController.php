<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FeedbackController extends Controller
{
    public function showForm(Feedback $feedback = null)
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
            // Handle API call failure or unexpected response format
            $errorStatus = $response->failed() ? $response->status() : 'Unexpected response format';
            return back()->with('error', 'Feedback submission failed due to sentiment analysis error: ' . $errorStatus);
        }

        // Prepare data for saving
        $feedbackData = $validatedData;
        $feedbackData['safety_measures'] = json_encode($validatedData['safety_measures'] ?? []);
        $feedbackData['additional_amenities'] = json_encode($validatedData['additional_amenities'] ?? []);
        $feedbackData['sentiment'] = $sentimentResult;

        // Update existing feedback or create new feedback
        if ($request->has('feedback_id')) {
            // Update existing feedback
            $feedback = Feedback::findOrFail($request->input('feedback_id'));
            $feedback->update($feedbackData);
            $message = 'Feedback updated successfully!';
        } else {
            // Create new feedback
            Feedback::create($feedbackData);
            $message = 'Feedback submitted successfully!';
        }

        // Redirect back with a success message
        return back()->with('success', $message);
    }

}
