{{-- Including CSS --}}
<link rel="stylesheet" href="{{asset('css/event-card-style.css')}}">

{{-- The card --}}
<article class="event-card__card--container">
    {{-- The photo with the date --}}
    <section class="event-card__photo--modify">
        <time class="event-card__time" datetime="{{ \Carbon\Carbon::parse($event->date)->format('d/m') }}">
            <span class="event-card__day">{{ \Carbon\Carbon::parse($event->date)->format('d') }}</span>
            <span class="event-card__month">{{ \Carbon\Carbon::parse($event->date)->format('M') }}</span>
        </time>
        <img src="{{asset('images/running-is-one-of-the-best-ways-to-stay-fit-royalty-free-image-1036780592-1553033495.jpg')}}" alt="" width="640px" height="427px">
    </section>
    {{-- The title and details--}}
    <section class="event-card__details--modify">
        <h2>{{$event->name}}</h2>
        
        <p class="event-card__summary-details">
            {{$event->description}}
        </p>
    </section>
    {{-- The icons with the distance and participants --}}
    <aside class="event-card__distance-and-participants--details">
        <p class="event-card__distance">
            <i class="fa-solid fa-person-running"></i>{{ number_format($event->distance_metres / 1000, 1) }} km
        </p>
        <p class="event-card__participants">
            <i class="fa-solid fa-user"></i>{{ count($event->participants) }}
        </p>
    </aside>
</article>


