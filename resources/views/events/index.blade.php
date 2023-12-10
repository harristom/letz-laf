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
            display: grid;
            place-content: center;
            position: sticky;            
            bottom: 20px;
            right: 20px;
            box-shadow: 0px 0px 0px 1px var(--page-bg);
        }
    </style>

    <div class="events-page">
        <div class="events-page__btns">
            <button class="events-page__previous-btn" type="button">Previous</button>
        </div>

        <div class="events-page__list">
            <div class="events-page__add-btn-wrapper">
                <a href="{{ route('events.create') }}" class="button events-page__add-btn"><i class="fa-solid fa-plus fa-xl" title="Add"></i></a>
            </div>

            @if (count($events) == 0)
                <p>No events found</p>
            @endif

            @foreach ($events as $event)
                <x-event-card :event="$event" />
            @endforeach

        </div>
    </div>
@endsection
