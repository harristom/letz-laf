<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    
    // Show all events
    public function index(){
        return view('gigs.index',
        [
            'events' => Event::all(),

        ]);
    }

    //Show single event
    public function show($id){
        return view('show', [
            'event' => Event::find($id)
        ]);
    }
}

