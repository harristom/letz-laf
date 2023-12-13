<style>
    .event-card {
        position: relative;
        width: 350px;
        height: 19rem;
        background-color: var(--card-bg);
        overflow: hidden;
        border-radius: 3px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        display: flex;
        flex-direction: column;
    }

    .event-card__photo {
        position: relative;
        height: 200px;
        background-color: var(--primary-color);
        overflow: hidden;
    }

    .event-card__time-circle {
        background-color: var(--primary-color);
        color: white;
        text-transform: uppercase;
        text-align: center;
        border-radius: 50%;
        font-size: 1rem;
        width: 3em;
        height: 3em;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 2;
        font-weight: 600;
        display: grid;
        place-content: center;
        line-height: 0.9;
    }

    .event-card__day {
        font-size: 1.2em;
    }

    .event-card__month {
        font-size: 0.75em;
    }

    .event-card__img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        /* Fixes pixellation in Chrome */
        overflow: visible;
    }

    .event-card__details {
        padding: 10px;
        background-color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 10px;
        flex-grow: 1;
    }

    .event-card__title {
        margin-bottom: 10px;
        font-weight: 800;
        font-size: 1.5rem;
        /* Adds the ellipsis */
        -webkit-line-clamp: 2;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .event-card__summary {
        line-height: 1.8em;
        color: rgb(119, 119, 119);
        opacity: 0;
        /* Adds the ellipsis */
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .event-card__distance-and-participants {
        display: flex;
        color: rgb(182, 182, 182);
        gap: 15px;
    }

    .event-card__icon {
        margin-right: 5px;
    }

    .event-card__link {
        color: inherit;
    }

    .event-card__link:hover {
        text-decoration: none;
    }

    .event-card__title-and-summary {
        display: grid;
        grid-template-rows: auto 0fr;
        transition: grid-template-rows 300ms;
    }

    /* Animations */

    .event-card:hover .event-card__img {
        filter: brightness(0.5);
        transform: scale(1.1);
    }

    .event-card__img {
        transition: 0.3s;
    }

    .event-card:hover .event-card__summary {
        opacity: 1;
        transition: opacity 200ms 200ms;
    }

    .event-card:hover .event-card__title-and-summary {
        grid-template-rows: auto 1fr;
    }

</style>

{{-- The card --}}
<a href="{{ route('events.show', $event) }}" class="event-card__link">
    <article class="event-card">
        {{-- The photo with the date --}}
        <section class="event-card__photo">
            <div class="event-card__time-circle">
                <time class="event-card__time" datetime="{{ $event->date }}">
                    <span class="event-card__day">{{ \Carbon\Carbon::parse($event->date)->format('d') }}</span><br>
                    <span class="event-card__month">{{ \Carbon\Carbon::parse($event->date)->format('M') }}</span>
                </time>
            </div>
            <img src="{{ $event->image_path ? asset('storage/' . $event->image_path) : asset('images/event-fallback.jpg') }}"
                alt="" class="event-card__img">
        </section>
        {{-- The title and details --}}
        <section class="event-card__details">
            <div class="event-card__title-and-summary">
                <h3 class="event-card__title">{{ $event->name }}</h3>
                <p class="event-card__summary">
                    {{ $event->description }}
                </p>
            </div>
            <aside class="event-card__distance-and-participants">
                <p class="event-card__distance">
                    <i class="fa-solid fa-person-running event-card__icon"></i>{{ $event->distance }} km
                </p>
                <p class="event-card__participants">
                    <i class="fa-solid fa-user event-card__icon "></i>{{ count($event->participants) }}
                </p>
            </aside>
        </section>
        {{-- The icons with the distance and participants --}}
    </article>
</a>
