@extends('layout')
{{-- this "layout" is form our layout.blade.php --}}
{{-- see it as a class inheritance --}}

@section('content')
{{-- "content" refers to the name given in the @yield of layout.blade.php --}}
{{-- don't forget the @endsection at the end ;) --}}

@foreach ($events as $event)
{{-- :listing passes the current listing data to the component --}}
{{-- that way, listing-card can display the data dynamically --}}
<x-event-listing :event="$event" />
@endforeach

@endsection