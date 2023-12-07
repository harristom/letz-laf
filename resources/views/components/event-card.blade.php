{{-- MAIN PAGE, PAST EVENTS --}}
@props(['event'])

<link rel="stylesheet" href="{{asset('\public\css\event-listing.css')}}">



    {{-- event input type should be "file"
    from to create listing need to be told to process image enctype= --}}

    <article class="event-card__card--modify">
        <section class="container">
    <aside class="event-card__city--modify">{{$event->location}}</aside>
    <div class="imageContainer">
        <a href="{{$event->id}}">
            <img src="{{asset('images/running-is-one-of-the-best-ways-to-stay-fit-royalty-free-image-1036780592-1553033495.jpg')}}" alt="">
        </a>
    </div>
    <div>
        <h3 class="locationTag">{{$event->name}}</h3>
        {{-- <h3>{{$event->name}}</h3> --}}
    </div>
    <div class="eventDate">
        {{-- <span>Month</span>
        <span>Date</span> --}}
        <p class="date"> {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</p>
    </div>
    <div>
        <h3 class="locationTag">{{$event->name}}</h3>
        <!-- <h4 class="eventTitle">Title</h4> -->
    </div>
</section>
<aside class="event-card__title--modify">
    <p class="event-card__distance--modify"><i class="fa-solid fa-person-running">{{ number_format($event->distance_metres / 1000, 1) }} km
    </i></p>
    <p class="event-card__participants--modify"><i class="fa-solid fa-user">{{ count($event->participants) }}</i></p>
</aside>
    </article>



<style>
:root {
    --primary-color: #ee5c35;
}

* {
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
    box-sizing: border-box;
}

body {
    background-color: #fffbef;
    padding: 10px;
}
 
 .container{
    /* margin: 10px;
    position: relative; */
    position: relative;
    width: 300px;
    height: 280px;
    background-color: #fff;
    overflow: hidden;
    margin: 40px;
}
.imageContainer{
    height: 200px;
    position: relative;
}

.container img {
    height: 100%;
    width: 100%;
    transition: 0.5s ease;
    /* border-radius: 10px; */
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
}

.container img:hover {
    transform: scale(1.1);
    filter: grayscale(0%);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

h3{
    padding-left: 10px;
}

.eventDate{
    background-color: orange;
    border: solid orange;
    width: 60px;
    height: 60px;
    border-radius: 100%;
    position: absolute;
    top: 10px;
    left: 10px;
    padding: 5px;  
    color: white
}
.date{
    font-family: 'Courier New', Courier, monospace;
    font-size: 11px;
    font-weight: lighter;
}

span{
    padding: 9px;
    color: white;
    font-family: 'Courier New', Courier, monospace;
    font-weight: bold;
    font-size: 12px;
}

.locationTag{

    width: 200px;
    color: var(--primary-color);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bold;
    position: absolute;
    border-radius: 5px;
    /* top: 60% ; */
    margin-left: 9px ;
    margin-top: 10px;
}
</style>


