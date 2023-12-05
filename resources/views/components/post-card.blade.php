{{--card for the news--}}

@props(['post'])

<div>
    <h3>{{$post->title}}</h3>
    {{--here should show an image--}}
    <p>{{$post->content}}</p>
    <div>
        {{--to show when was created (timestamp)--}}
        <small></small>
    </div>
</div>