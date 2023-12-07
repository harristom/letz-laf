@extends('layout')

<style>
    .event-details {
        display: flex;
    }

    .event-data {
        display: flex;
        gap: 1em;
    }
</style>

@section('content')
<h2 class="event-title">{{ $event->name }}</h2>
<div class="event-details">
    <div class="event-details-left">
        <p>{{ $event->description }}</p>
        <div class="event-data">
            <div><i class="fa-regular fa-calendar"></i> {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</div>
            <div><i class="fa-regular fa-clock"></i> {{ \Carbon\Carbon::parse($event->date)->format('H:i') }}</div>
            <div><i class="fa-solid fa-person-running"></i> {{ count($event->participants) }} registered</div>
            <form action="{{ route('events.register', $event) }}" method="POST">
                @csrf
                <button>Join</button>
            </form>
        </div>
    </div>
    <div class="event-details-right">
        <x-map-card :latitude="$event->latitude" :longitude="$event->longitude"/>
        <x-weather-card :event="$event" />
    </div>
</div>
@endsection