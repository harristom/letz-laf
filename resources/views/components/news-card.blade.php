<div class="news-component-container">
    <h4 class="news-component-container__h4">{{ $post->title }}</h4>
    {{-- Check if image file exists  --}}
    @if (file_exists(public_path('images/' . $post->image_path)))
        {{-- Image exists, show the div with the image --}}
        <div class="news-component-container__content one">
            <img class="news-component-container__content-img" src="{{ asset('images/' . $post->image_path) }}"
                alt="">
        </div>
        {{ $post->content }}
</div>
</div>
</div>
@else
{{-- Image does not exists, hide the div --}}
<div style="display: none">
</div>
@endif
</div>

<style>
    .news-component-container {
        width: 100%;
        display: flex;
        flex-direction: row;
        border: 1px solid white;
        border-radius: 5%;
        padding: 10px 25px 25px 25px;
        margin: 20px 20px 50px 20px;
        width: 500px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
            rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    }

    .news-component-container__h4 {
        color: #ee5c35;
        margin-top: 10px;
        font-size: 18px;
    }

    .news-component-container__content.one {
        width: 100%;
        height: 100%;
    }

    .news-component-container__content-img {
        max-width: 100%;
        height: auto;
    }
</style>
