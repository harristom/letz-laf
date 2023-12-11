@extends('layout')

<style>
    .event-details__content {
        display: flex;
        gap: 20px;
        margin-left: 20px;
    }

    .event-details__title {
        position: absolute;
        color: white;
        font-size: 2.5rem;
        font-weight: 700;
        bottom: 10px;
        left: 20px;
        margin: 0px;
    }

    .event-details__data {
        display: flex;
        gap: 1em;
        margin-bottom: 15px;
    }

    .event-details__left {
        flex-basis: 60%;
    }

    .event-details__right {
        flex-basis: 40%;
    }

    .event-details__buttons {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-bottom: 30px;
    }

    .event-details__form {
        margin-bottom: 0px;
    }

    .event-details__banner {
        background-color: var(--primary-color);
        background-image: url('{{ asset('storage/' . $event->image_path) }}');
        background-size: cover;
        background-position: 50% 25%;
        background-repeat: no-repeat;
        height: 400px;
        width: 100%;
        margin-bottom: 20px;
        position: relative;
    }

    .event-details__banner::before {
        position: absolute;
        content: '';
        inset: 0px;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
    }

    .event-details__description {
        margin-top: 0px;
    }

    .weather-card {
        position: absolute;
        bottom: 10px;
        right: 20px;
    }

</style>

@section('content')
    <div class="event-page">
        <div class="event-details__banner">
            <h2 class="event-details__title">{{ $event->name }}</h2>
            <x-weather-card :event="$event"/>
        </div>
        <div class="event-details__content">
            <div class="event-details__left">
                <p class="event-details__description">{{ $event->description }}</p>
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
                    <form action="{{ route('events.destroy', $event) }}" method="POST" class="event-details__form">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
                @if (count($event->results) > 0)
                    <x-event-results-table :event="$event" />
                @endif
                @if (count($event->participants) > 0)
                    <x-event-participants-table :event="$event" />
                @endif
                
            </div>
            <div class="event-details__right">
                <x-map-card :latitude="$event->latitude" :longitude="$event->longitude" />
            </div>
        </div>
    </div>
@endsection
