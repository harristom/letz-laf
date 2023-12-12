@extends('layout')

@section('content')

<h2 class="events-page__title">Events</h2>

<button class="past-events-btn" type="button">Previous</button>

<div class="events-page-list">

    @if (count($events) == 0)
        <p>No events found</p>
    @endif

    @foreach ($events as $event)

        <x-event-card :event="$event" />

    @endforeach

</div>
    
@endsection

<style>
    /* adding a title to the page */
    .events-page__title{
        text-align: left;
        color: var(--primary-color);
        font-size: 40px;
        margin: 20px 75px;
    }


    .events-page-list {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 30px auto;
        gap: 40px;
      }

      .past-events-btn {
        margin: 0 auto;
        display: block;
      }

</style>
