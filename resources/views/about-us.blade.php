@extends('layout')

@section('content')

<h3 class="top-section__title">
    <p class="top-section__title--black-color" >
        About 
    </p>
    <p class="top-section__title--main-color" >
        us
    </p>
</h3>

<div class="aboutus__container">

    <div class="intro">
        <div class="intro__text">
            <h4 class="intro__text-title">Nice to meet you</h4>
            <p class="intro__text-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptas sit mollitia officia deleniti saepe nisi eaque fuga non laudantium.</p>
        </div>

        <img class="intro__picture" src="{{asset('images/brainstormingSession.jpg')}}" alt="picture of a brain storming session">

    </div>

    <div class="team-card">
        <img class="team-card__picture" src="{{asset('images/profilepicture.jpeg')}}" alt="">

        <div class="team-card__description">
            <p class="team-card__description--padding">Kammy A</p>
            <p class="team-card__description--padding">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
            <div>
                <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin"></i>
                    Get in touch
                </a> 
                <br>
                <a class="team-card__portfolio-link" href="#"> <i class="fa-solid fa-laptop-code"></i>
                    Browse my portfolio
                </a>
            </div>
        </div>

    </div>
    <div class="team-card__container--reverse">
        <div class="team-card__description--reverse">
            <p class="team-card__description--padding">Vania Barbosa</p>
            <p class="team-card__description--padding">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
            <div>
                <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin"></i>
                    Get in touch
                </a> 
                <br>
                <a class="team-card__portfolio-link" href="#"> <i class="fa-solid fa-laptop-code"></i>
                    Browse my portfolio
                </a>
            </div>
        </div>
        <img class="team-card__picture--reverse" src="{{asset('images/profilepicture.jpeg')}}" alt="">

    </div>
    <div class="team-card">
        <img class="team-card__picture" src="{{asset('images/profilepicture.jpeg')}}" alt="">

        <div class="team-card__description">
            <p class="team-card__description--padding">Tom HARRIS</p>
            <p class="team-card__description--padding">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
            <div>
                <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin"></i>
                    Get in touch
                </a> 
                <br>
                <a class="team-card__portfolio-link" href="#"> <i class="fa-solid fa-laptop-code"></i>
                    Browse my portfolio
                </a>
            </div>
        </div>

    </div>
    <div class="team-card__container--reverse">
        

        <div class="team-card__description--reverse">
            <p class="team-card__description--padding">Jaria POBA</p>
            <p class="team-card__description--padding">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
            <div>
                <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin"></i>
                    Get in touch
                </a> 
                <br>
                <a class="team-card__portfolio-link" href="#"> <i class="fa-solid fa-laptop-code"></i>
                    Browse my portfolio
                </a>
            </div>
        </div>
        <img class="team-card__picture--reverse" src="{{asset('images/profilepicture.jpeg')}}" alt="">

    </div>
    <div class="team-card">
        <img class="team-card__picture" src="{{asset('images/profilepicture.jpeg')}}" alt="">

        <div class="team-card__description">
            <p class="team-card__description--padding">Marcia SANTOS</p>
            <p class="team-card__description--padding">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
            <div>
                <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin"></i>
                    Get in touch
                </a> 
                <br>
                <a class="team-card__portfolio-link" href="#"> <i class="fa-solid fa-laptop-code"></i>
                    Browse my portfolio
                </a>
            </div>
        </div>

    </div>
</div>

@endsection

<style>

/* ABOUT US PAGE STYLING */


.aboutus__container{
    margin: 0 10px;
    padding: 0 100px;
    max-width: 1700px;
}

.top-section__title{
    display: flex;
    justify-content: center;
    text-transform: uppercase;
}

.top-section__title--main-color{
    color: var(--primary-color);
    padding-left: 5px;
}

.intro{
    display: flex;
    height: 400px;
    width: 100%;
    margin: 20px 10px;
    background-color: white;
    border-radius: 3px;  
}

.intro__text{
    width: 50%;
    padding: 50px; 
    border-radius:  3px 0 0 3px ;
}

.intro__text-title{
    color: var(--primary-color);
    font-size: 25px;
    text-transform: uppercase;
}

.intro__picture{
    width: 50%;
    flex-shrink: 0;
    border-radius: 0 3px 3px 0;
}

.intro__text-content{
    font-weight: lighter;
}

.team-card{
    display: flex;
    width: 200px;
    height: 250px;
    color: var(--card-bg);
    align-items: center;
    justify-content: center;
    position: relative;
    transition-duration: .5s;
    cursor: pointer;
    margin: 100px;
}


.team-card__container--reverse{
    display: flex;
    width: 200px;
    height: 250px;
    color: var(--card-bg);
    align-items: center;
    justify-content: center;
    position: relative;
    transition-duration: .5s;
    cursor: pointer;
    margin: 100px;
    margin-left: 70%;
}

.team-card__picture {
    position: absolute;
    width: 250px;
    height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    border-radius: 3px;
}

.team-card__picture--reverse{
    position: absolute;
    width: 250px;
    height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    border-radius: 3px;
}

.team-card__description {
    z-index: 0;
    width: 400px;
    height: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: var(--primary-color);
    transition-duration: .5s;
    font-size: 15px;
    padding: 0 25px;
    font-weight: lighter;
    transform: translateX(25%);
    border-radius: 3px;
}

.team-card__description--reverse{
    z-index: 0;
    width: 400px;
    height: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: var(--primary-color);
    transition-duration: .5s;
    font-weight: lighter;
    font-size: 15px;
    padding: 0 25px;
    transform: translateX(-25%);
    border-radius: 3px;
}

.team-card:hover .team-card__description {
    transform: translateX(110%) translateY(0%);
    transition-duration: 0.5s;
}

.team-card__container--reverse:hover .team-card__description--reverse {
    transform: translateX(-110%) translateY(0%);
    transition-duration: 0.5s;
}

.team-card__portfolio-link, .team-card__linkedin-link {
    text-decoration: none;
    color: black;
    font-size: 14px;
}

.team-card__portfolio-link:hover , .team-card__linkedin-link:hover {
    color: var(--page-bg);
}

</style>