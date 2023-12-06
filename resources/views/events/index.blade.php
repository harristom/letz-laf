@extends('layout')

@section('content')

<div class="seePast">
    <a href="/past-events">See past events</a>
</div>

<div id="container">
    @if (count($events) == 0)
        <p>No listing found</p>
    @endif

    @foreach ($events as $event)

        <x-event-card :event="$event" />

    @endforeach

</div>
    
@endsection
<style>
    #container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        width: 80%;
        padding: 20px;
        align-items: center;
        margin: 0 auto;
      }

.seePast{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
}
</style>