<style>
    .event-card {
        position: relative;
        width: 350px;
        height: 320px;
        background-color: var(--card-bg);
        overflow: hidden;
        border-radius: 3px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    }

    .event-card__photo {
        position: relative;
        height: 200px;
        background-color: var(--primary-color);
    }

    .event-card__time {
        background-color: var(--primary-color);
        color: white;
        text-transform: uppercase;
        text-align: center;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        padding: 10px;
        line-height: 0.9em;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 1;
        font-weight: 600;
    }

    .event-card__day {
        font-size: 18px;
    }

    .event-card__month {
        font-size: 12px;
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
        position: relative;
    }

    .event-card__title {
        margin-bottom: 10px;
        font-weight: 800;
        font-size: 1.5rem;
    }

    .event-card__summary {
        visibility: hidden;
        opacity: 0;
        margin-bottom: 10px;
        line-height: 1.8em;
        color: rgb(119, 119, 119);
        -webkit-line-clamp: 2;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .event-card__distance-and-participants {
        display: flex;
        color: rgb(182, 182, 182);
        gap: 15px;
        position: absolute;
        bottom: 10px;
        left: 10px;
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

    /* Animations */

    .event-card:hover .event-card__img {
        filter: brightness(0.5);
        transform: scale(1.1);
    }

    .event-card:hover .event-card__details {
        transform: translateY(-100px);
    }

    .event-card__img,
    .event-card__details {
        transition: 0.3s;
    }

    .event-card:hover .event-card__summary {
        visibility: visible;
        opacity: 1;
    }

    .event-card__summary {
        transition: opacity 0.3s 0.1s;
    }
</style>

{{-- The card --}}
<article class="event-card">
    <a href="{{ route('events.show', $event) }}" class="event-card__link">
        {{-- The photo with the date --}}
        <section class="event-card__photo">
            <time class="event-card__time" datetime="{{ $event->date }}">
                <span class="event-card__day">{{ \Carbon\Carbon::parse($event->date)->format('d') }}</span>
                <span class="event-card__month">{{ \Carbon\Carbon::parse($event->date)->format('M') }}</span>
            </time>
            <img src="{{ $event->image_path ? asset('storage/' . $event->image_path) : asset('images/running-is-one-of-the-best-ways-to-stay-fit-royalty-free-image-1036780592-1553033495.jpg') }}"
                alt="" class="event-card__img">
        </section>
        {{-- The title and details --}}
        <section class="event-card__details">
            <h3 class="event-card__title">{{ $event->name }}</h3>

            <p class="event-card__summary">
                {{ $event->description }}
            </p>
        </section>
        {{-- The icons with the distance and participants --}}
        <aside class="event-card__distance-and-participants">
            <p class="event-card__distance">
                <i class="fa-solid fa-person-running event-card__icon"></i>{{ $event->distance }} km
            </p>
            <p class="event-card__participants">
                <i class="fa-solid fa-user event-card__icon "></i>{{ count($event->participants) }}
            </p>
        </aside>
    </a>
</article>
