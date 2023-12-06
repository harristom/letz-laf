{{--showing the news on the website--}}

{{--extends a layout file--}}
@extends('layout')
{{--defines a section called "content"--}}
@section('content')

    <div class="big-news">
        <div class="header-news">
            <h2>News</h2>
            <a href="/news/create">Create a news post</a>
        </div>

        {{--checks if the $posts variable is empty--}}
        @if (count($posts) == 0)
            {{--displays a message--}}
            <p>No news found!</p>
        @endif
        
       
        {{--loops through each post in the $posts array--}}
        @foreach ($posts as $post)
            {{--component called "big-news-card" passing the current post as a parameter--}}
                <x-big-news-card :post="$post" />
        @endforeach
    </div>

@endSection

<style>
    .header-news {
        width: 100%;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin: 0 0 20px 40px;

    }

    .big-news {
        width: 70%;
        margin: auto auto;
        display: flex;
        flex-direction: column;
    }
</style>

