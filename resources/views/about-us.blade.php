@extends('layout')

@section('content')

    <h3>About us</h3>

    <div class="teamCardLeft AboutUsFlexbox">
        <img class="teamPictureLeft" src="" alt="">

        <div class="aboutUsDescriptionLeft aboutUsDescription">
            <p>Kammy A</p>

            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
        </div>

    </div>
    <div class="teamCardRight AboutUsFlexbox">
        
        <div class="aboutUsDescriptionRight aboutUsDescription">
            <p>Vania Barbosa</p>

            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
        </div>

        <img class="teamPictureRight" src="" alt="">
        
    </div>
    <div class="teamCardLeft AboutUsFlexbox">
        <img class="teamPictureLeft" src="" alt="">

        <div class="aboutUsDescriptionLeft aboutUsDescription">
            <p>Tom HARRIS </p>

            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
        </div>

        
        
    </div>
    <div class="teamCardRight AboutUsFlexbox">
        
        <div class="aboutUsDescriptionRight aboutUsDescription">
            <p>Jaria POBA </p>

            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
        </div>

        <img class="teamPictureLeft" src="" alt=""></div>
        
    </div>
    <div class="teamCardLeft AboutUsFlexbox">
        <img class="teamPictureLeft" src="" alt="">

        <div class="aboutUsDescriptionLeft aboutUsDescription">
            <p>Marcia SANTOS</p>

            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
        </div>
        
    </div>
@endsection

<style>

/* ABOUT US PAGE STYLING */
.AboutUsFlexbox img {
    
    flex-shrink: 0;
    height: 200px;
    width: 200px;
    border-radius: 50%;
    object-fit: cover;
   
}

.teamPictureLeft{
    transition: 0.5s ease;
    box-shadow: 0 1px 2px rgba(255,165,0,0.75);

}

.teamPictureLeft:hover {
    transition: 0.5s ease;
    transform: scale(1.1);
    box-shadow: -35px 28px 56px -32px rgba(255,165,0,0.75);

}



.teamPictureRight{
    transition: 0.5s ease;
    box-shadow: 0 1px 2px rgba(255,165,0,0.75);
}

.teamPictureRight:hover{
    transition: 0.5s ease;
    transform: scale(1.1);
    box-shadow: 13px 17px 38px -11px rgba(255,165,0,0.75);

}

.AboutUsFlexbox{
    display: flex;
    width: 600px;
    margin-left: 80px;
    margin-right: 80px;
    margin-top: 50px;
}

.aboutUsDescription{
    font-family: sans-serif;
    margin-top: 40px;
    margin-left: 30px;
    margin-right: 30px;
}
</style>