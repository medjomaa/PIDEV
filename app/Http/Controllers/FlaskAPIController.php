<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FlaskAPIController extends Controller
{
    public function __construct()
    {
        // Require users to be authenticated for all actions in this controller
        $this->middleware('auth');
    }

    public function fetchRecommendations()
    {
        $user_id = Auth::id(); // Obtain the authenticated user's ID
        Log::info("Fetching recommendations for user ID: {$user_id}");

        $client = new Client([
            'base_uri' => 'http://localhost:5001/api/', // Specify the base URI for API requests
            'timeout'  => 2.0, // Set a timeout for requests
        ]);

        try {
            // Attempt to fetch recommendations for the authenticated user
            $recResponse = $client->request('GET', "recommendations/{$user_id}");
            $recommendations = json_decode($recResponse->getBody()->getContents(), true);

            // Attempt to fetch additional user info for the authenticated user
            $userInfoResponse = $client->request('GET', "userinfo/{$user_id}");
            $userInfo = json_decode($userInfoResponse->getBody()->getContents(), true);

            // Pass the fetched data to the 'entrainement' view
            return view('entrainement', compact('recommendations', 'userInfo'));
        } catch (\Exception $e) {
            Log::error("Error fetching data for user ID {$user_id}: " . $e->getMessage());
            // Return to the previous page with an error message
            return redirect('/recommendation')->with('error', 'Please try filling the recommendation forum ');
        }
    }
}
