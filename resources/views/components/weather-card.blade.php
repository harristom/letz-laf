<style>
    @import url('https://fonts.googleapis.com/css?family=Lato');

    .weather-card {
        box-sizing: border-box;
        font-family: 'Lato', sans-serif;
        display: flex;
        justify-content: space-between;
        align-items: end;
        margin: 15px;
        border-radius: 20px;
        padding: 20px;
        width: 400px;
        height: 300px;
        color: #444444;
        background-color: white;
        box-shadow: 0px 0px 25px 1px rgba(50, 50, 50, 0.1);
    }

    .weather-icon {
        width: 150px;
        align-self: flex-start;
    }

    .temperature {
        font-size: 3.5em;
    }

    .conditions {
        font-size: 2.2em;
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