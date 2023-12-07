<style>
    @import url('https://fonts.googleapis.com/css?family=Lato');

    .weather-card {
        display: flex;
        justify-content: space-between;
        align-items: end;
        margin: 10px 0px;
        border-radius: 3px;
        padding: 20px;
        aspect-ratio: 4 / 3;
        color: #444444;
        background-color: white;
    }

    .weather-icon {
        width: 150px;
        align-self: flex-start;
    }

    .temperature {
        font-size: 2em;
    }

    .conditions {
        font-size: 1.2em;
    }
</style>

<div class="weather-card">
    <div class="weather-details">
        <div class="temperature"></div>
        <div class="conditions"></div>
    </div>
    <img class="weather-icon">
</div>

<script defer>
    const lat = {{ $event->latitude }};
    const long = {{ $event->longitude }};
    // const time = {{ \Carbon\Carbon::parse($event->date)->timestamp }};
    const time = 1701889706;
    const KEY = 'FanFIXEd9GYfroPCKADlttIyYnZ1UMH3';
    fetch(`https://api.pirateweather.net/forecast/${KEY}/${lat},${long},${time}?units=ca`)
        .then(res => res.json())
        .then(json => {
            const forecast = json.hourly.data[0];
            document.querySelector('.temperature').textContent = Math.round(forecast.temperature) + ' °C';
            document.querySelector('.conditions').textContent = forecast.summary;
            document.querySelector('.weather-icon').src = '/images/weather-icons/' + forecast.icon + '.svg';
        });
</script>