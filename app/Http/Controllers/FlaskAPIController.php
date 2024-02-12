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
        $user_id = 3; // This could be dynamically determined in your application
        $url = "http://localhost:5001/api/summary/" . $user_id;
        

        try {
            $response = $client->request('GET', $url);
            $recommendations = json_decode($response->getBody()->getContents(), true);
            return view('recommendations', ['recommendations' => $recommendations]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Could not fetch recommendations: ' . $e->getMessage()], 500);
        }
    }
}
