<div id="map"></div>
<script>
    let map;
    let marker;
    const oldLat = {{ old('latitude') ?? $event->latitude ?? 0 }};
    const oldLong = {{ old('longitude') ?? $event->longitude ?? 0 }};
    if (oldLat && oldLong) {
        // If we already have a lat and long, use those for the marker
        map = L.map('map').setView([oldLat, oldLong], 17);
        // TODO: This marker cannot currently be dragged
        marker = L.marker([oldLat, oldLong]).addTo(map);
    } else {
        // Show all of Luxembourg
        map = L.map('map').setView([49.85, 6.1], 8);
    }

    // Add tiles (graphics for map)
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Initialize search bar
    const search = new GeoSearch.GeoSearchControl({
        provider: new GeoSearch.OpenStreetMapProvider(),
        style: 'bar',
        marker: {
            icon: new L.Icon.Default(),
            draggable: true
        },
        showPopup: false
    });

    // Add search to map
    map.addControl(search);

    // When a search result is picked
    // remove any existing marker
    // and set hidden inputs to new lat/long
    map.on('geosearch/showlocation', (result) => {
        if (marker) marker.remove();
        document.querySelector('input[name="latitude"]').value = result.location.y;
        document.querySelector('input[name="longitude"]').value = result.location.x;
    });

    map.on('geosearch/marker/dragend', (result) => {
        // When the marker is dragged
        // set hidden inputs to new lat/long
        document.querySelector('input[name="latitude"]').value = result.location.lat;
        document.querySelector('input[name="longitude"]').value = result.location.lng;
    });
</script>

<input type="hidden" name="latitude" required value="{{ old('latitude') ?? $event->latitude ?? '' }}">
@error('latitude')
    {{ $message }}
@enderror

<input type="hidden" name="longitude" required value="{{ old('longitude') ?? $event->longitude ?? '' }}">
@error('longitude')
    {{ $message }}
@enderror
