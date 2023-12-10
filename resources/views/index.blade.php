@extends('layout')

@section('content')

<section class="top-section">
    <div class="top-section__slogan">
        {{-- <h1 class="top-section__slogan--white">Meet,   </h1>
        <h1 class="top-section__slogan--main-color">Laugh,</h1>
        <h1 class="top-section__slogan--white">Run</h1> --}}
        <h1>
            <p class="homepage__titles--white-color">Meet,</p>
            <p class="homepage__titles--main-color">Laugh,</p>
            <p class="homepage__titles--white-color">Run</p>
        </h1>
        
    </div>
</section>

<h2 class="top-section__short-description">
    Where nature meets the pace - Run, reconnect and rediscover Luxembourg.
</h2>

<section class="events-preview">
    <h3 class="events-preview__title"> 
        <p class="homepage__titles--black-color">Upcoming &nbsp</p> 
        <p class="homepage__titles--main-color">events</p> 
    </h3>

    <div class="events-preview__listings">
        @foreach(\App\Models\Event::latest()->take(4)->get() as $event)
            <x-event-card :event="$event"/>
        @endforeach
    </div>
   
</section>

<section class="news-preview">
    <h3 class="news-preview__title"> News</h3>

    <div class="news-preview__listings">
        @foreach(\App\Models\Post::latest()->take(2)->get() as $post)
            <x-big-news-card :post="$post" />
        @endforeach
    </div>
    
</section>

@endsection

<style>

    .top-section{
        background-image: url("images/parkrun.png");
        height: 400px;
        color: var(--card-bg);
        text-transform: uppercase;
        opacity: 0.8;
    }

    .homepage__titles--main-color{
        color: var(--primary-color);
        padding-left: 10px;
        /* font-family: 'Lato', sans-serif; */
    }

    .top-section__slogan{
        font-size: 40px;
        padding: 120px;
    }

    .top-section__slogan--main-color{
        color: var(--primary-color);
        
    }

    .top-section__short-description{
        text-align: center;
        overflow-wrap: wrap;
        font-size: 30px;
    }

    .events-preview__title, .news-preview__title{
        text-align: center;
        display: flex;
        text-transform: uppercase;
        margin: 40px auto;
        justify-content: center;
        font-size: 30px;
    }
    
    .events-preview{
        margin: 50px 5% 100px 5%;
    }

    .events-preview__listings{
        width: 100%;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 40px;
    }

    .news-preview__listings{
        width: 100%;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .news-preview{
        background-color: #d3d3d347;
    }

</style>