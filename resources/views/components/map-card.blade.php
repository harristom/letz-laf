<style>
    .map-card {
        aspect-ratio:  3 / 2;
        width: 100%;
    }
</style>
<div id="map" class="map-card"></div>
<script>
    // Create map and center on location
    const map = L.map('map').setView([{{ $latitude }}, {{ $longitude }}], 13);

    // Add tiles to map (tiles are the graphical representation of the map)
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Add marker to map at location
    L.marker([{{ $latitude }}, {{ $longitude }}]).addTo(map);
    // Redraw the map once it has a size
    setInterval(() => map.invalidateSize(), 100);
</script>
