<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Event;
class EventsController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function index()
    {
        $events = Event::all(); // Retrieve all events
        $userId = 1; // You should dynamically determine the user ID based on your application's context

                // Fetch user information and BMI
                // Fetch exercise recommendations, including BMI
        $recommendationsResponse = $this->client->get('http://localhost:5001/api/recommendations/' . $userId);
        $recommendationsData = json_decode($recommendationsResponse->getBody()->getContents(), true);
        $recommendations = $recommendationsData['recommendations'];
        $userBMI = $recommendationsData['bmi']; // Now fetching BMI from the same endpoint

        // Pass the fetched data to your view
        return view('home', compact('userBMI', 'recommendations','events'));

    }
}
