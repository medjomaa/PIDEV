<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'type' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
    ]);

    // Add user_id to the validated data
    $validatedData['user_id'] = Auth::id();

    // Create a new event
    Event::create($validatedData);

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
        try {
            // Validate the input
            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'type' => 'required',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after:start_date',
            ]);
    
            // Update the event with validated data
            $event->update($validatedData);
    
            // Redirect to the index page with a success message
            return redirect()->route('events.index')->with('success', 'Event updated successfully.');
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Event update failed: ' . $e->getMessage());
    
            // Redirect back with an error message
            return back()->withInput()->withErrors(['updateError' => 'Failed to update the event. Please try again.']);
        }
    }
    

    public function destroy(Event $event)
    {
        // Delete the event
        $event->delete();

        // Redirect to the index page with a success message
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
    
}