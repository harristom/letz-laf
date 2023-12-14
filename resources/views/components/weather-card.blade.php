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
    const KEY = 'FanFIXEd9GYfroPCKADlttIyYnZ1UMH3';

    // Get place and time
    const lat = {{ $event->latitude }};
    const long = {{ $event->longitude }};
    const time = {{ \Carbon\Carbon::parse($event->date)->timestamp }};

    // Call API
    fetch(`https://api.pirateweather.net/forecast/${KEY}/${lat},${long}${time < Date.now() / 1000 ? ',' + time : ''}?units=ca&exclude=flags,currently,minutely`)
        .then(res => res.json())
        .then(json => {
            // See if the hour we want is in the hourly data
            for (const forecast of json.hourly.data) {
                if (time - forecast.time >= 0 && time - forecast.time < 60 * 60) return forecast;
            }
            // If not, see if the day we want is in the daily data
            for (const forecast of json.daily.data) {
                if (time - forecast.time >= 0 && time - forecast.time < 24 * 60 * 60) return forecast;
            }
        })
        .then(forecast => {
            console.log('Requested: ' + (new Date(time * 1000)).toLocaleString());
            if (!forecast) {
                console.log('no match');
                return;
            }
            console.log('Found: ' + (new Date(forecast.time * 1000)).toLocaleString());

            // Hourly forecasts have "tempersature", daily has "temperatureHigh"
            forecast.temperature ??= forecast.temperatureHigh;
            
            document.querySelector('.weather-card__temperature').textContent = Math.round(forecast.temperature) + ' °C';
            document.querySelector('.weather-card__conditions').textContent = forecast.summary;
            document.querySelector('.weather-card__icon').src = '/images/weather-icons/' + forecast.icon + '.svg';
        });
</script>
