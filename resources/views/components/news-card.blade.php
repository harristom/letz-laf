<div class="news-component-container">
    <h4 class="news-component-container__h4">{{ $post->title }}</h4>
    {{-- Check if image file exists  --}}
    @if (file_exists(public_path($post->image_path)))
        {{-- Image exists, show the div with the image --}}
        <div class="news-component-container__content one">
            <img class="news-component-container__content-img" src="{{ asset('storage/' . $post->image_path) }}" alt="">
        </div>
        {{ $post->content }}
    @else
        {{-- Image does not exists, hide the div --}}
        <div style="display: none">
        </div>
    @endif
    <div class="news-component-container__content two">
        <p>{{ $post->content }}</p>
    </div>
</div>

<style>
    .news-component-container {
        display: flex;
        flex-direction: row;
        border: 1px solid white;
        border-radius: 0%;
        padding: 15px;
        margin: 10px;
        width: 500px;
        box-shadow: 0 4px 8px rgba(87, 87, 87, 0.1);
    }

    .news-component-container__h4 {
        color: #ee5c35;
        margin-top: 10px;
        font-size: 18px;
    }
    .news-component-container__content {
        display: ;
        flex-direction: row;
    }

    .news-component-container__content.one {
        width: 30%;
    }

    .news-component-container__content.two {
        width: 60%;
    }

    .news-component-container__content-img {
        max-width: 100%;
        height: auto;
    }

</style>
