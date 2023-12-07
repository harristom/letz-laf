<style>
    #map {
        aspect-ratio: 3 / 2;
    }
</style>
<div id="map"></div>
<script>
    const map = L.map('map').setView([{{ $latitude }}, {{ $longitude }}], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    L.marker([{{ $latitude }}, {{ $longitude }}]).addTo(map);
    setInterval(() => map.invalidateSize(), 100);
</script>
