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


<style>
 
.container{
    margin: 20px;
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
    width: 50px;
    height: 50px;
    border-radius: 100%;
    position: absolute;
    top: 35px;
    left: 50px;
    padding-top: 5px;  
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
    width: 150px;
    color: white;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bold;
    position: absolute;
    border-radius: 5px;
    top: 25% ;
    margin-left: 9px ;
}
</style>


