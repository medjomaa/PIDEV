<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormSubmissionController extends Controller
{
    public function showForm()
    {
        // Assuming you have a single view that toggles between feedback and recommendation forms
        return view('form_submission');
    }

    public function handleSubmit(Request $request)
    {
        $formType = $request->input('form_type');

        if ($formType === 'feedback') {
            return $this->handleFeedbackSubmission($request);
        } elseif ($formType === 'recommendation') {
            return $this->handleRecommendationSubmission($request);
        }

        return back()->with('error', 'Invalid form submission.');
    }

    protected function handleFeedbackSubmission(Request $request)
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

    protected function handleRecommendationSubmission(Request $request)
    {
       
        if ($request->input('form_type') === 'recommendation') {

        // Validate the request data
        $validatedData = $request->validate([
            'age' => 'required|integer|min:12',
            'sex' => 'required|string',
            'fitness_goal' => 'required|string',
            'workout_duration' => 'required|integer',
            'exercise_type' => 'required|string',
            'health_conditions' => 'nullable|string',
            'workout_environment' => 'required|string',
            'feedback_text' => 'required|string', // Assuming you want to capture some feedback here as well
        ]);

        // API URL for sentiment analysis
        $apiUrl = 'http://localhost:5000/analyze';

        // Make a POST request to the sentiment analysis API
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            // 'API-Key' => 'YourExpectedAPIKey', // Uncomment and replace if your API requires an API Key
        ])->post($apiUrl, ['text' => $validatedData['feedback_text']]);

        // Process the API response
        if ($response->successful() && isset($response->json()['sentiment'])) {
            $sentimentResult = $response->json()['sentiment'];
        } else {
            // Handle API call failure
            $errorStatus = $response->failed() ? $response->status() : 'Unexpected response format';
            return back()->with('error', 'Recommendation submission failed due to sentiment analysis error: ' . $errorStatus);
        }

        // Create new recommendation with the sentiment result
        Recommendation::create(array_merge($validatedData, ['sentiment' => $sentimentResult]));

        // Redirect back with a success message
        return back()->with('success', 'Recommendation submitted successfully!');
    }
}
}
