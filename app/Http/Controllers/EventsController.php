<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App\Models\Event;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->middleware('auth');
        $this->client = new Client();
    }

    public function index()
    {
        $events = Event::all(); // Retrieve all events
        $products = Product::all();
        $userId = Auth::id(); // Dynamically get the logged-in user's ID
    
        try {
            $recommendationsResponse = $this->client->get('http://localhost:5001/api/recommendations/' . $userId);
            $recommendationsData = json_decode($recommendationsResponse->getBody()->getContents(), true);
    
            // Check if recommendations and BMI data is returned
            if (empty($recommendationsData['recommendations']) || empty($recommendationsData['bmi'])) {
                // Display message if no recommendations or BMI data is found
                $userBMI = 'Not available';
                $recommendations = 'Please fill out the recommendation form to get your personalized recommendations.';
            } else {
                // If data is available, set it for the view
                $recommendations = $recommendationsData['recommendations'];
                $userBMI = $recommendationsData['bmi'];
            }
        } catch (RequestException $e) {
            // Handle potential errors like network issues or incorrect URLs
            $userBMI = 'Not available';
            $recommendations = 'Please try fill the recommendation forum first.';
        }
    
        // Pass the fetched data to your view
        return view('home', compact('userBMI', 'recommendations', 'events', 'products'));
    }
    
}
