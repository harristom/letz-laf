<div class="container">
    <h4>{{ $post->title }}</h4>
    {{-- Check if image file exists  --}}
    @if (file_exists(public_path($post->image_path)))
        {{-- Image exists, show the div with the image --}}
        <div class="content one">
            <img src="{{ asset('storage/' . $post->image_path) }}" alt="">
        </div>
    @else
        {{-- Image does not exists, hide the div --}}
        <div style="display: none">
        </div>
    @endif
    <div class="content two">
        <p>
            {{ $post->content }}
        </p>
    </div>
</div>

<style>
    .container {
        display: flex;
        flex-direction: row;
        border: 1px solid white;
        border-radius: 0%;
        padding: 15px;
        margin: 10px;
        width: 500px;
        box-shadow: 0 4px 8px rgba(87, 87, 87, 0.1);
    }

    .content {
        display: ;
        flex-direction: row;
    }

    .one {
        width: 30%;
    }

    .two {
        width: 60%;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    h4 {
        color: #ee5c35;
        margin-top: 10px;
        font-size: 18px;
    }
</style>
