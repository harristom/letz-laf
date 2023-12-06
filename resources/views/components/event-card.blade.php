{{-- MAIN PAGE, PAST EVENTS --}}
@props(['event'])

<link rel="stylesheet" href="{{asset('\public\css\event-listing.css')}}">



    {{-- event input type should be "file"
    from to create listing need to be told to process image enctype= --}}
<section class="container">
    <div class="imageContainer">
        <a href="{{$event->id}}">
            <img src="{{$event->image_path}}" alt="">
        </a>
    </div>
    <div>
        <h3>{{$event->name}}</h3>
    </div>
    <div class="eventDate">
        <span>Month</span>
        <span>Date</span>
        <p>{{$event->date}}</p>
    </div>
    <div>
        <h3 class="locationTag">LOCATION</h3>
        <!-- <h4 class="eventTitle">Title</h4> -->
        <i>{{$event->latitude}}N , {{$event->longitude}}E</i>
    </div>
</section>


