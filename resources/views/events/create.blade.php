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
            <div id="map"></div>
            <script>
                let map;
                let marker;
                if ({{ old('latitude') ?? 0 }} && {{ old('longitude') ?? 0 }}) {
                    // If we already have a lat and long, use those for the marker
                    map = L.map('map').setView([{{ old('latitude') }}, {{ old('longitude') }}], 17);
                    // TODO: This marker cannot currently be dragged
                    marker = L.marker([{{ old('latitude') }}, {{ old('longitude') }}]).addTo(map);
                } else {
                    // Show all of Luxembourg
                    map = L.map('map').setView([49.85, 6.1], 8);
                }

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                const search = new GeoSearch.GeoSearchControl({
                    provider: new GeoSearch.OpenStreetMapProvider(),
                    style: 'bar',
                    marker: {
                        icon: new L.Icon.Default(),
                        draggable: true
                    },
                    showPopup: false
                });

                map.addControl(search);

                map.on('geosearch/showlocation', (result) => {
                    // console.log(result);
                    if (marker) marker.remove();
                    document.querySelector('input[name="latitude"]').value = result.location.y;
                    document.querySelector('input[name="longitude"]').value = result.location.x;
                });

                map.on('geosearch/marker/dragend', (result) => {
                    // console.log(result);
                    document.querySelector('input[name="latitude"]').value = result.location.lat;
                    document.querySelector('input[name="longitude"]').value = result.location.lng;
                });
            </script>
            <input type="hidden" name="latitude" required value="{{ old('latitude') }}">
            @error('latitude')
                {{ $message }}
            @enderror
            <input type="hidden" name="longitude" required value="{{ old('longitude') }}">

            @error('longitude')
                {{ $message }}
            @enderror
        </div>

        <button>Add</button>
    </form>
@endsection
