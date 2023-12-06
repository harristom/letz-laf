@extends('layout')

@section('content')

<a href="/past-events">See past events</a>
<div>
    @if (count($events) == 0)
        <p>No listing found</p>
    @endif

    @foreach ($events as $event)

        <x-event-card :event="$event" />

    @endforeach

</div>
    
@endsection

