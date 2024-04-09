<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
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

    public function myMethod()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // The user is logged in
            $userName = Auth::user()->name;
            // Continue with your logic, now safely using $userName
        } else {
            // User is not authenticated, redirect with a message
            return redirect('/registration')->with('error', 'You need to create an account or log in.');
        }
    }
    public function index()
    {
        $events = Event::all(); // Retrieve all events
        $products = Product::all(); 
        $userId = Auth::id(); // Dynamically get the logged-in user's ID
                // Fetch user information and BMI
                // Fetch exercise recommendations, including BMI
        $recommendationsResponse = $this->client->get('http://localhost:5001/api/recommendations/' . $userId);
        $recommendationsData = json_decode($recommendationsResponse->getBody()->getContents(), true);
        $recommendations = $recommendationsData['recommendations'];
        $userBMI = $recommendationsData['bmi']; // Now fetching BMI from the same endpoint

        // Pass the fetched data to your view
        return view('home', compact('userBMI', 'recommendations','events','products'));

    }
    
}
