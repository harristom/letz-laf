@extends('layout')

<style>
    #map {
        height: 300px;
        width: 400px;
    }
</style>

@section('content')
    <form action="{{ route('events.store') }}" method="POST" novalidate>
        @csrf
        <div>
            <label for="name">Event name: </label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" style="display: block;" required>{{ old('description') }}</textarea>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="distance">Distance (km) </label>
            <input type="number" name="distance" id="distance" min="0.01" step="0.01" required
                value="{{ old('distance') }}">
            @error('distance')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="date">Date: </label>
            <input type="datetime-local" name="date" id="date" required value="{{ old('date') }}">
            @error('date')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="location">Location: </label>
            <x-map-input-card />            
        </div>

        <button>Add</button>
    </form>
@endsection
