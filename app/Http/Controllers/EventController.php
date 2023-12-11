<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function addResults(Request $request){

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'event_id' => 'required|exists:events,id',
            'finish_time' => 'required|string',
        ]);

        list($hours, $minutes, $seconds) = explode(':', $validated['finish_time']);

        $finishTimeInSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

        
        /*
            Update or insert a record in the 'results' table of the database
            The record is identified by the 'user_id' and 'event_id' fields
            If a record with the same 'user_id' and 'event_id' already exists, it will be updated
            Otherwise, a new record will be inserted
        */

        DB::table('results')->updateOrInsert(
            ['user_id' => $validated['user_id'], 'event_id' => $validated['event_id']],
            ['finish_time' => $finishTimeInSeconds]
        );

        
        return redirect()->back()->with('message', 'Added to results!');
        
    }
}
