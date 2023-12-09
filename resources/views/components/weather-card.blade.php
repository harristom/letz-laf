<style>
    @import url('https://fonts.googleapis.com/css?family=Lato');

    .weather-card {
        color: white;
        text-align: right;
    }

    .weather-card__forecast {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-bottom: 8px;
    }

    .weather-card__icon {
        height: 3.7rem;
    }

    .weather-card__temperature {
        font-size: 2rem;
    }

    .weather-card__conditions {
        font-size: 1.2rem;
    }
</style>

<div class="weather-card">
    <div class="weather-card__forecast">
        <img class="weather-card__icon">
        <div class="weather-card__details">
            <div class="weather-card__temperature"></div>
            <div class="weather-card__conditions"></div>
        </div>
    </div>
    <div class="weather-card__date">{{ \Carbon\Carbon::parse($event->date)->toFormattedDayDateString() }}</div>
</div>

<script defer>
    const lat = {{ $event->latitude }};
    const long = {{ $event->longitude }};
    // TODO: Change to use real event time (currently has a problem due to forecasts being too far ahead possibly)
    const time = {{ \Carbon\Carbon::parse($event->date)->timestamp }};
    // const time = 1701889706;
    const KEY = 'FanFIXEd9GYfroPCKADlttIyYnZ1UMH3';
    fetch(`https://api.pirateweather.net/forecast/${KEY}/${lat},${long},${time}?units=ca`)
        .then(res => res.json())
        .then(json => {
            const forecast = json.hourly.data[0];
            document.querySelector('.weather-card__temperature').textContent = Math.round(forecast.temperature) +
                ' °C';
            document.querySelector('.weather-card__conditions').textContent = forecast.summary;
            document.querySelector('.weather-card__icon').src = '/images/weather-icons/' + forecast.icon + '.svg';
        });
</script>
