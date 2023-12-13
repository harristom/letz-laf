{{-- showing the news on the website --}}

{{-- extends a layout file --}}
@extends('layout')
{{-- defines a section called "content" --}}
@section('content')
    <div class="big-news">
        <div class="big-news__header">
            <h2>News</h2>
            @auth
                @if(auth()->user()->role == 'Admin' || auth()->user()->role == 'Organiser')
                    <a href="/news/create">Create a news post</a>
                @endif
            @endauth
        </div>
        <div class="big-news__div">
            {{--checks if the $posts variable is empty--}}
            @if (count($posts) == 0)
                {{-- displays a message --}}
                <p>No news found!</p>
            @endif  
        
            {{--loops through each post in the $posts array--}}
            @foreach ($posts as $post)
                {{--component called "big-news-card" passing the current post as a parameter--}}
                    <x-big-news-card :post="$post" />
            @endforeach
        </div>
    </div>
@endSection

<style>

    .big-news {
        width: 80%;
        margin: auto auto;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .big-news__header {
        width: 95%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 30px;
        color: var(--primary-color);
    }

    .big-news__header h2 {
        font-size: 40px;
    }

    .news-page__title--styling {
        font-size: 40px;
        color: var(--primary-color);
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .big-news {
        width: 100%;
        margin: auto auto;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

</style>
