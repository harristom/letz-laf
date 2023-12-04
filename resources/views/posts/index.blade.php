{{--showing the news on the website--}}

{{--extends a layout file--}}
@extends('layout')
{{--defines a section called "content"--}}
@section('content')

    <div>
        {{--checks if the $posts variable is empty--}}
        @if (count($posts) == 0)
            {{--displays a message--}}
            <p>No news found!</p>
        @endif
        
        {{--loops through each post in the $posts array--}}
        @foreach ($posts as $post)
            {{--component called "post-card" passing the current post as a parameter--}}
            <x-post-card :post="$post" />
        @endforeach
    </div>
    
@endSection