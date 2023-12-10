<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view(
            'events.index',
            [
                'events' => Event::orderBy('date')->get(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'distance' => 'required|decimal:0,2|min:0.01',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'image_path' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('events', 'public');
        }
        $validated['organiser_id'] = auth()->user();
        $event = Event::create($validated);
        return to_route('events.show', $event);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
        return view('events.show', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
        return view('events.edit', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'distance' => 'required|decimal:0,2|min:0.01',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'image_path' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        // TODO: allow changing owner
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('events', 'public');
        }
        $event->update($validated);
        return to_route('events.show', $event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
        $event->delete();
        return redirect()->route('events.index')->with('message', 'Event deleted!');
    }

    public function register(Event $event)
    {
        $event->participants()->attach(auth()->user());
        return back();
    }
}
