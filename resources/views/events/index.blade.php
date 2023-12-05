@extends('layout')

@section('content')

<div>
    @if (count($event) == 0)
    <p>No listing found</p>
@endif

@foreach ($events as $event)
<h2><a href="/events/{{$event->id}}"> {{$event->title}} </a></h2>


    
@endforeach

</div>
    
@endsection