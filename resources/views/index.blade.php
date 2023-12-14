@extends('layout')

@section('content')
    <style>
        .top-section {
            background-image: url("images/background.png");
            background-repeat: no-repeat;
            background-position: 0% 70%;
            background-size: cover;
            height: 400px;
            display: flex;
        }

        .top-section__slogan {
            color: white;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.5),transparent);
            text-transform: uppercase;
            font-size: 4rem;
            font-weight: 700;
            padding-left: 3vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .top-section__slogan--main-color {
            color: var(--primary-color);
        }

        .top-section__short-description {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            margin-block: 40px;
        }

        .homepage__titles--main-color {
            color: var(--primary-color);
            /* padding-left: 10px; */
        }

        .events-preview {
            margin-bottom: 50px;
        }

        .events-preview__title,
        .news-preview__title {
            text-align: center;
            text-transform: uppercase;
            margin: 30px 15px;
            font-size: 2rem;
        }

        .events-preview__listings {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        .news-preview__listings {
            width: 100%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        .news-preview {
            /* background-color: #d3d3d347; */
        }
    </style>

    <section class="top-section">
        <div class="top-section__slogan">
            <p>
                <span class="homepage__titles--white-color">Meet,</span><br>
                <span class="homepage__titles--main-color">Laugh,</span><br>
                <span class="homepage__titles--white-color">Run</span>
            </p>
        </div>
    </section>

    <p class="top-section__short-description">
        Where nature meets pace&mdash;run, reconnect and rediscover Luxembourg
    </p>

    <section class="events-preview">
        <h2 class="events-preview__title"><span class="homepage__titles--black-color">Upcoming </span><span class="homepage__titles--main-color">events</span></h2>

        <div class="events-preview__listings">
            @foreach (\App\Models\Event::latest()->take(3)->get() as $event)
                <x-event-card :event="$event" />
            @endforeach
        </div>

    </section>

    <section class="news-preview">
        <h2 class="news-preview__title"><span class="homepage__titles--black-color">Latest </span><span class="homepage__titles--main-color">news</span></h2>

        <div class="news-preview__listings">
            @foreach (\App\Models\Post::latest()->take(2)->get() as $post)
                <x-small-news-card :post="$post" />
            @endforeach
        </div>
    </section>
@endsection
