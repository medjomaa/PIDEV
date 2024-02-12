<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log; 
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
class DashboardController extends Controller{
    public function index()
{
    $graphJSON = $this->getVisualizationData(); // Fetch the graph data
    
    // Pass the data to the 'vis' view
    return view('vis', ['graphJSON' => $graphJSON]);
}

protected function getVisualizationData() {
        $client = new Client();
        try {
            $response = $client->request('GET', 'http://localhost:334/api/visualizations');
            $data = json_decode($response->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
            Log::error("Failed to fetch visualization data: " . $e->getMessage());
            $data = [];  // Use an empty array as a fallback
        }

        return $data; // Return the data directly
    }


}
