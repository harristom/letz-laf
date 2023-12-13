{{-- news page card --}}

<div class="news-content-container">
    <div class="news-content">
        <h3 id="{{ $post->id }}">{{ $post->title }}</h3>
        {{-- Check if image file exists  --}}
        {{-- @if (file_exists(public_path($post->image_path))) --}}
        @if ($post->image_path)
            {{-- Image exists, show the div with the image --}}
            <div>
                <img src="{{ 'storage/' .  $post->image_path }}" alt="">
            </div>
        @endif
        <div class="news-content__div">
            <p>{{ $post->content }}</p>
        </div>
    </div>
    <div class="news-content news-div-date">
        <small>Created : {{ $post->created_at }}</small>

        {{-- Check that the user is logged in and is either an admin or an event organiser who wrote the post originally --}}
        @if(auth()->user() && (auth()->user()->role == 'Admin' || (auth()->user()->role == 'Organiser' && auth()->user() == $post->user)))
            <a href="/news/{{ $post->id }}">Update</a>
            <form action="{{route('posts.delete', $post)}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        @endif
    </div>
</div>

<style>
    /*------------------- BIG NEWS PAGE -------------------*/
    .news-content-container {
        width: 45%;
        display: flex;
        flex-direction: column;
        margin: 20px 20px 50px 20px;
        border-radius: 10px;
        padding: 10px 25px 25px 25px;
        box-shadow: 0px 0px 10px -3px rgba(0, 0, 0, 0.2);
        transition: transform .5s;
    }

    .news-content {
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .news-div {
        display: flex;
        flex-direction: row;
    }

    .news-div p {
        margin: 0;
    }

    .news-content h3 {
        text-align: center;
        font-size: 30px;
        padding: 20px;
    }

    .news-content img {
        width: 400px;
        margin: auto;
        height: auto;
        border-radius: 5px;
        margin-right: 20px;
    }

    .news-content p {
        font-size: 15px;
        text-align: center;
        hyphens: auto;
        text-align: justify;
        line-height: 30px;
    }

    .news-div-date {
        display: flex;
        flex-direction: column;
        justify-content: left;
    }

    .news-div-date small {
        text-align: left;
        padding: 20px 0 0 0;
    }

    .news-content__div{
        padding: 20px 0;
    }


</style>
