<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Retrieve all events
        $events = Event::all();
        
        return view('events.index', compact('events'));
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
}