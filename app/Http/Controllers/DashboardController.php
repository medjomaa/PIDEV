<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function index(Request $request)
{
    // Check if the user is authenticated and the name is 'admin'
    if (Auth::check() && Auth::user()->name == 'admin') {
        $selectedDate = $request->input('date'); // Retrieve the selected date from the request
        $graphJSON = $this->getVisualizationData($selectedDate); // Fetch the graph data with the selected date
        $userName = Auth::user()->name; // This will be 'admin' as per the condition

        // Pass the data, the selected date, and the user's name back to the view
        return view('vis', [
            'graphJSON' => $graphJSON,
            'selectedDate' => $selectedDate,
            'userName' => $userName,
        ]);
    } else {
        // If the user is not 'admin', redirect them or show an error
        // For example, redirect back with an error message
        return redirect()->back()->with('error', 'You are not authorized to access this page.');
        // Or, to redirect to a specific route, you can use: return redirect()->route('home')->with('error', 'You are not authorized to access this page.');
    }
}


    protected function getVisualizationData($date = null)
    {
        $client = new Client();
        $url = 'http://localhost:334/api/visualizations';

        // If a date is provided, append it as a query parameter
        if (!is_null($date)) {
            $url .= '?date=' . $date;
        }

        try {
            $response = $client->request('GET', $url);
            $data = json_decode($response->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
            Log::error("Failed to fetch visualization data: " . $e->getMessage());
            $data = []; // Use an empty array as a fallback
        }

        return $data; // Return the data directly
    }
    
}
