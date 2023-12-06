{{-- MAIN PAGE, PAST EVENTS --}}
@props(['event'])

<link rel="stylesheet" href="{{asset('\public\css\event-listing.css')}}">



    {{-- event input type should be "file"
    from to create listing need to be told to process image enctype= --}}
    
<section class="container">
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
        <p class="date">{{$event->date}}</p>
    </div>
    <div>
        <h3 class="locationTag">{{$event->name}}</h3>
        <!-- <h4 class="eventTitle">Title</h4> -->
    </div>
</section>

<style>
 
 .container{
    margin: 20px;
    position: relative;
}
.imageContainer{
    height: 200px;
    width:300px ;
    position: relative;
}

.container img {
    height: 100%;
    width: 100%;
    filter: grayscale(100%);
    transition: 0.5s ease;
    border-radius: 10px;
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
    background-color: orange;
    width: 200px;
    color: white;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bold;
    position: absolute;
    border-radius: 5px;
    top: 60% ;
    margin-left: 9px ;
    margin-top: 10px;
}
</style>


