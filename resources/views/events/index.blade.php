@extends('layout')

@section('content')

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
    .events-page-list {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        width: 80%;
        align-items: center;
        margin: 30px auto;
        gap: 30px;
      }

      .past-events-btn {
        margin: 0 auto;
        display: block;
      }

</style>
