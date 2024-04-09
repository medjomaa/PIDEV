<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Retrieve all events
        $events = Event::all();
        
        return view('events.index', compact('events'));
    }

    public function eventshow()
    {
        // Retrieve all events
        $events = Event::all();
        
        return view('events.eventshow', compact('events'));
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
    
    public function create()
    {    
        $categories = Category::all();

        // Show the form to create a new event
        return view('events.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Create a new event
        Event::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function show(Event $event)
    {
        // Show a single event
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        $categories = Category::all();

        // Show the form to edit an event
        return view('events.edit', compact('event', 'categories'));
    }

    public function update(Request $request, Event $event)
    {
        // Validate the input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Update the event
        $event->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        // Delete the event
        $event->delete();

        // Redirect to the index page with a success message
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
    public function searchE(Request $request)
{
    $searchTerm = $request->input('search');

    $events = Event::where('title', 'like', '%' . $searchTerm . '%')
                   ->orWhere('description', 'like', '%' . $searchTerm . '%')
                   ->orWhere('type', 'like', '%' . $searchTerm . '%')
                   ->orWhere('start_date', 'like', '%' . $searchTerm . '%')
                   ->orWhere('end_date', 'like', '%' . $searchTerm . '%')
                   ->get();

    return view('events.eventshow', ['events' => $events]);
}
}