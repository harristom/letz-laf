{{-- news page card --}}

<div class="news-content-container">
    <div class="news-content news-div-content">
        <h3>{{ $post->title }}</h3>
        {{-- Check if image file exists  --}}
        @if (file_exists(public_path('images/' . $post->image_path)))
            {{-- Image exists, show the div with the image --}}
            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
        @else
            {{-- Image does not exists, hide the div --}}
            <div style="display: none">
            </div>
        @endif
        <div>
            <p>{{ $post->content }}</p>
        </div>
    </div>
    <div class="news-content news-div-date">
        <small>Created : {{ $post->created_at }}</small>
    </div>
</div>

<style>
    /*------------------- BIG NEWS PAGE -------------------*/
    .news-content-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        margin: 20px;
        border-radius: 10px;
        padding: 10px 25px 25px 25px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
            rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        ;
        transition: transform .5s;
    }

    .news-content-container:hover {
        transform: scale(1.1);
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
    }

    .news-content img {
        width: 400px;
        margin: auto;
        height: auto;
        border-radius: 5px;
        margin-right: 20px;
    }

    .news-content p {
        font-size: 20px;
        text-align: center;
        hyphens: auto;
        text-align: justify
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
</style>
