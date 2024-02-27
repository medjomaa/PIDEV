<?php
// App/Http/Controllers/FlaskAPIController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FlaskAPIController extends Controller
{
    public function fetchRecommendations($user_id)
    {
        $client = new Client();
        $recommendationsUrl = "http://localhost:5001/api/recommendations/" . $user_id;
        $userInfoUrl = "http://localhost:5001/api/userinfo/" . $user_id; // Adjust the endpoint as necessary

        try {
            // Fetch recommendations
            $recResponse = $client->request('GET', $recommendationsUrl);
            $recommendations = json_decode($recResponse->getBody()->getContents(), true);
            
            // Fetch user info
            $userInfoResponse = $client->request('GET', $userInfoUrl);
            $userInfo = json_decode($userInfoResponse->getBody()->getContents(), true);

            // Return the 'entrainement' view with both recommendations and user info
            return view('entrainement', [
                'recommendations' => $recommendations,
                'userInfo' => $userInfo // Pass user info to the view
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions, such as network errors or issues with the Flask API
            return response()->json(['error' => 'Could not fetch data: ' . $e->getMessage()], 500);
        }
    }
}
