<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User; // Assuming you have a User model
use App\Models\Feedback; // Assuming you have a Feedback model
use App\Models\Recommendation;
use DB;

class DashboardController extends Controller
{
    public function index(Request $request)
{
    if (Auth::check() && Auth::user()->name == 'admin') {
        $selectedDate = $request->input('date');
        $graphJSON = $this->getVisualizationData($selectedDate);
        $userName = Auth::user()->name;

        // Fetch user and feedback statistics
        $totalUsers = User::count();
        $maleUsers = Recommendation::where('sex', 'male')->count(); // Assuming there's a gender column
        $femaleUsers = Recommendation::where('sex', 'female')->count();
        $totalFeedbacks = Feedback::count();

        $positiveFeedbacks = Feedback::where('sentiment', 'positive')->count();
        $negativeFeedbacks = Feedback::where('sentiment', 'negative')->count();
        $neutralFeedbacks = Feedback::where('sentiment', 'neutral')->count();
        
        $excellentq = Feedback::where('equipment_quality', 'Excellent')->count();
        $goodq = Feedback::where('equipment_quality', 'Good')->count();
        $fairq = Feedback::where('equipment_quality', 'Fair')->count();
        $poorq = Feedback::where('equipment_quality', 'Poor')->count();

        // Calculate percentages
        $malePercentage = ($totalUsers > 0) ? ($maleUsers / $totalUsers) * 100 : 0;
        $femalePercentage = ($totalUsers > 0) ? ($femaleUsers / $totalUsers) * 100 : 0;
        $feedbackPercentage = ($totalUsers > 0) ? ($totalFeedbacks / $totalUsers) * 100 : 0;
        
        // Calculate sentiment percentages
        $positivePercentage = ($totalFeedbacks > 0) ? ($positiveFeedbacks / $totalFeedbacks) * 100 : 0;
        $negativePercentage = ($totalFeedbacks > 0) ? ($negativeFeedbacks / $totalFeedbacks) * 100 : 0;
        $neutralPercentage = ($totalFeedbacks > 0) ? ($neutralFeedbacks / $totalFeedbacks) * 100 : 0;

        $excellentqp = ($totalFeedbacks > 0) ? ($excellentq / $totalFeedbacks) * 100 : 0;
        $goodqp = ($totalFeedbacks > 0) ? ($goodq / $totalFeedbacks) * 100 : 0;
        $fairqp = ($totalFeedbacks > 0) ? ($fairq / $totalFeedbacks) * 100 : 0;
        $poorqp = ($totalFeedbacks > 0) ? ($poorq / $totalFeedbacks) * 100 : 0;

        return view('vis', [
            'graphJSON' => $graphJSON,
            'selectedDate' => $selectedDate,
            'userName' => $userName,
            'malePercentage' => $malePercentage,
            'femalePercentage' => $femalePercentage,
            'feedbackPercentage' => $feedbackPercentage,
            'positivePercentage' => $positivePercentage,
            'negativePercentage' => $negativePercentage,
            'neutralPercentage' => $neutralPercentage,
            'excellentqp'=>$excellentqp,
            'goodqp'=>$goodqp,
            'fairqp'=>$fairqp,
            'poorqp'=>$poorqp
        ]);
    } else {
        return redirect()->back()->with('error', 'You are not authorized to access this page.');
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
