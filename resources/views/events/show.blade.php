@extends('layout')

<style>
    .event-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 0 auto;
        gap: 20px;
        width: 900px;
    }

    .event-details__title {
        margin-top: 0px;
    }

    .event-details__data {
        display: flex;
        gap: 1em;
        margin-bottom: 15px;
    }

    .event-details__right {
        width: 300px;
    }

    .event-details__buttons {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-bottom: 30px;
    }

    .event-details__form {
        margin-bottom: 0px;;
    }
</style>

@section('content')
    <div class="event-details">
        <div class="event-details__left">
            <h2 class="event-details__title">{{ $event->name }}</h2>
            <p>{{ $event->description }}</p>
            <div class="event-details__data">
                <div><i class="fa-regular fa-calendar"></i> {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</div>
                <div><i class="fa-regular fa-clock"></i> {{ \Carbon\Carbon::parse($event->date)->format('H:i') }}</div>
                <div><i class="fa-solid fa-person-running"></i> {{ count($event->participants) }} registered</div>
            </div>
            <div class="event-details__buttons">
                <form action="{{ route('events.register', $event) }}" method="POST" class="event-details__form">
                    @csrf
                    <button>Join</button>
                </form>
                <a href="{{ route('events.edit', $event) }}" class="button">Edit</a>
            </div>
            @if (count($event->results) > 0)
                <x-event-results-table :event="$event" />
            @endif
        </div>
        <div class="event-details__right">
            <x-map-card :latitude="$event->latitude" :longitude="$event->longitude" />
            <x-weather-card :event="$event" />
        </div>
    </div>
@endsection
