{{-- MAIN PAGE, PAST EVENTS --}}

@section('content')

<link rel="stylesheet" href="{{assets('\public\css\event-listing.css')}}">


    {{-- event input type should be "file"
    from to create listing need to be told to process image enctype= --}}
    <section class="container">

        <div class="imageContainer">
            <a href="{{$event->id}}">
                <img src=""alt="">
            </a>
        </div>
        <div class="eventDate">
            <span>Month</span>
            <span>Date</span>
        </div>
        <div>
            <h3 class="locationTag">LOCATION</h3>
            <!-- <h4 class="eventTitle">Title</h4> -->
        </div>
    </section>
@endsection

