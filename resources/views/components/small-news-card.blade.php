<style>
    .small-news-card {
        background: var(--card-bg);
        box-shadow: 0px 10px 20px -3px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        height: 500px;
        overflow: hidden;
        border-radius: 3px;
        display: flex;
    }

    .small-news-card__right {
        padding: 30px 30px 30px 0px;
        margin-left: 20px;
        position: relative;
    }

    .small-news-card__read-more {
        position: absolute;
        inset: 0px;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        background-image: linear-gradient(to top, white 3em, transparent 6em);
        justify-content: end;
        padding-bottom: 20px;
    }

    .small-news-card__left {
        min-width: 40%;
    }

    .small-news-card__title {
        margin-bottom: 10px;
        font-size: 1.5rem;
        font-weight: 800;
    }

    .small-news-card__img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }
</style>
<div class="small-news-card">
    @if ($post->image_path)
    <div class="small-news-card__left">
            <img src="{{ $post->image_path }}" alt="" class="small-news-card__img">
        </div>
    @endif
    <div class="small-news-card__right">
        <h3 class="small-news-card__title">{{ $post->title }}</h3>
        <p class="small-news-card__post-content">
            {{ $post->content }}
        </p>
        <p class="small-news-card__read-more"><a href="{{ route('posts.index') . '#' . $post->id }}">Read more →</a></p>
    </div>
</div>