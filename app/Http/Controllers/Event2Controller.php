<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Ensure you have the Event model created
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class Event2Controller extends Controller
{
    public function index()
    {
        $events = Event::select('id', 'title', 'description', 'type', 'start_date', 'end_date')
                        ->get()
                        ->map(function ($event) {
                            // Format the dates for FullCalendar
                            $event->start = Carbon::parse($event->start_date)->toIso8601String();
                            $event->end = Carbon::parse($event->end_date)->toIso8601String();
                            return $event;
                        });

        // Prepare events for the JavaScript calendar in the view
        $formattedEvents = $events->map(function ($event) {
            return [
                'title' => $event->title,
                'start' => $event->start,
                'end' => $event->end,
                // Additional fields here, if necessary
            ];
        });

        return view('calendar', compact('events', 'formattedEvents'));
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
public function __construct()
{
    $this->middleware('auth');
}

}
