@extends('layout')

@section('content')
<style>
    .events-page {
        margin-top: 30px;
    }

    .events-page__list {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 30px auto;
        gap: 30px;
        position: relative;
    }

    .events-page__previous-btn {
        margin: 0 auto;
        display: block;
    }

    .events-page__add-btn-wrapper {
        position: absolute;
        top: 0px;
        right: 10px;
        z-index: 2;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: end;
    }

    .events-page__add-btn {
        border-radius: 50%;
        height: 3.2em;
        width: 3.2em;
        flex-shrink: 0;
        display: grid;
        place-content: center;
        position: sticky;
        bottom: 20px;
        right: 20px;
        box-shadow: 0px 0px 0px 1px var(--page-bg);
    }

    .events-page__list-item {
        transition: opacity 2000ms;
        opacity: 1;
        /* Required to make the transition work */
        position: static;
        visibility: visible;
    }

    .events-page__list-item--hidden {
        opacity: 0;
        /* Required to make the transition work */
        position: absolute;
        visibility: hidden;
    }

    .events-page__list-item--old {
        filter: grayscale();
    }

</style>

<div class="events-page">
    <div class="events-page__btns">
        <button class="events-page__previous-btn" type="button">Older</button>
    </div>

    <div class="events-page__list" id="list">
        <div class="events-page__add-btn-wrapper">
            {{-- TODO: Add scroll up button --}}
            <a href="{{ route('events.create') }}" class="button events-page__add-btn"><i class="fa-solid fa-plus fa-xl" title="Add"></i></a>
        </div>

        @if (count($events) == 0)
            <p>No events found</p>
        @endif

        @foreach ($events as $event)
            @if ($event->date < now())
                <div class="events-page__list-item events-page__list-item--old events-page__list-item--hidden">
            @else
                <div class="events-page__list-item">
            @endif
                    <x-event-card :event="$event" />
                </div>
        @endforeach
    </div>
</div>
<script>

    const prevButton = document.querySelector('.events-page__previous-btn');
    prevButton.addEventListener('click', showPrev);
    
    const hiddenItems = document.getElementsByClassName('events-page__list-item--hidden');

    function showPrev() {
        const BATCH_SIZE = 3;
        // Gets the last 3 items from the collection
        // Or the last x if less than 3
        const items = [...hiddenItems].slice(0 - Math.min(hiddenItems.length, BATCH_SIZE));
        for (item of items) {
            item.classList.remove('events-page__list-item--hidden');
        }
        if (hiddenItems.length == 0) prevButton.remove();
    }

</script>
@endsection
