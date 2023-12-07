@extends('layout')

<style>
    #map {
        height: 300px;
        width: 400px;
    }
</style>

@section('content')
    <form action="{{ route('events.update', $event) }}" method="POST" novalidate>
        @csrf
        @method('PUT')
        <div>
            <label for="name">Event name: </label>
            <input type="text" name="name" id="name" required value="{{ old('name') ?? $event->name }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" style="display: block;" required>{{ old('description') ?? $event->description }}</textarea>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="distance">Distance (km) </label>
            <input type="number" name="distance" id="distance" min="0.01" step="0.01" required
                value="{{ old('distance') ?? $event->distance }}">
            @error('distance')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="date">Date: </label>
            <input type="datetime-local" name="date" id="date" required value="{{ old('date') ?? $event->date }}">
            @error('date')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="location">Location: </label>
            <x-map-card-picker />
            <input type="hidden" name="latitude" required value="{{ old('latitude') ?? $event->latitude }}">
            @error('latitude')
                {{ $message }}
            @enderror
            <input type="hidden" name="longitude" required value="{{ old('longitude') ?? $event->longitude }}">

            @error('longitude')
                {{ $message }}
            @enderror
        </div>

        <button>Save</button>
    </form>
@endsection
