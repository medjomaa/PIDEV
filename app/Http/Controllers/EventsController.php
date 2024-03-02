<?php
namespace App\Http\Controllers;

use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Retrieve all events

        return view('home', compact('events')); // Pass 'events' to the 'home' view
    }
}
