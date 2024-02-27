<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $selectedDate = $request->input('date'); // Retrieve the selected date from the request
        $graphJSON = $this->getVisualizationData($selectedDate); // Fetch the graph data with the selected date

        // Pass the data and the selected date back to the 'vis' view
        return view('vis', [
            'graphJSON' => $graphJSON,
            'selectedDate' => $selectedDate,
        ]);
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
