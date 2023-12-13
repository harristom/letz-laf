@extends('layout')

@section('content')
    <h2 class="top-section__title">
        <span class="top-section__title--black-color">About </span><span class="top-section__title--main-color">us</span>
    </h2>

    <div class="aboutus__container">

        <div class="intro">
            <div class="intro__text">
                <h3 class="intro__text-title">Nice to meet you</h3>
                <p class="intro__text-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptas
                    sit mollitia officia deleniti saepe nisi eaque fuga non laudantium.</p>
            </div>

            <img class="intro__picture" src="{{ asset('images/brainstormingSession.jpg') }}"
                alt="picture of a brain storming session">

        </div>

        <div class="team-cards">

            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/profilepicture.jpeg') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Name</h3>
                        <p class="team-card__bio">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                            
                            <a class="team-card__portfolio-link" href="#"> <i class="fa-brands fa-github fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/profilepicture.jpeg') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Name</h3>
                        <p class="team-card__bio">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                            
                            <a class="team-card__portfolio-link" href="#"> <i class="fa-brands fa-github fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/profilepicture.jpeg') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Name</h3>
                        <p class="team-card__bio">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                            
                            <a class="team-card__portfolio-link" href="#"> <i class="fa-brands fa-github fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/profilepicture.jpeg') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Name</h3>
                        <p class="team-card__bio">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                            
                            <a class="team-card__portfolio-link" href="#"> <i class="fa-brands fa-github fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/profilepicture.jpeg') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Name</h3>
                        <p class="team-card__bio">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Magnam rerum itaque ad tempora reiciendis voluptatibus tempore sint totam debitis excepturi?</p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="#"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                            
                            <a class="team-card__portfolio-link" href="#"> <i class="fa-brands fa-github fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

<style>
    /* ABOUT US PAGE STYLING */


    .aboutus__container {
        margin: 0 10px;
        padding: 0 100px;
        max-width: 1700px;
    }

    .top-section__title {
        display: flex;
        justify-content: center;
        text-transform: uppercase;
        font-size: 2.5rem;
        margin: 30px 5px;
    }

    .top-section__title--main-color {
        color: var(--primary-color);
        padding-left: 5px;
    }

    .intro {
        display: flex;
        height: 400px;
        width: 100%;
        margin: 20px 10px;
        background-color: white;
        border-radius: 3px;
    }

    .intro__text {
        width: 50%;
        padding: 50px;
    }

    .intro__text-title {
        /* color: var(--primary-color); */
        font-size: 25px;
        text-transform: uppercase;
    }

    .intro__picture {
        width: 50%;
        flex-shrink: 0;
        align-self: center;
    }

    .team-cards {
        display: flex;
        flex-direction: column;
    }

    .team-card {
        display: flex;
        height: 250px;
        align-items: center;
        justify-content: start;
        margin: 100px;
    }

    .team-card:nth-child(even of .team-card) {
        align-self: end;
        flex-direction: row-reverse;
        justify-content: end;
    }


    .team-card__picture {
        width: 250px;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    }

    .team-card__description {
        z-index: 0;
        height: 300px;
        background-color: var(--card-bg);
        font-size: 15px;
        padding: 25px;
        transform: translateX(-85%);
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        width: 200px;
        transition:
            width 300ms,
            transform 500ms 100ms;
    }

    .team-card:nth-child(even of .team-card) .team-card__description {
        transform: translateX(85%);
    }

    .team-card__text {
        visibility: hidden;
        opacity: 0;
        margin-left: 40px;
    }

    .team-card:nth-child(even of .team-card) .team-card__text {
        margin-left: unset;
        margin-right: 40px;
    }

    .team-card__title {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .team-card__bio {
        margin-bottom: 30px;
    }

    .team-card__socials {
        display: flex;
        gap: 3px;
    }

    .team-card__socials > *:hover {
        filter: saturate(3);
    }

    /* Team card hover effects */

    .team-card:hover .team-card__description {
        /* transform: translateX(110%) translateY(0%); */
        transform: translateX(-20px);
        width: 100%;
        transition:
            transform 300ms,
            width 500ms 100ms;
    }

    .team-card:nth-child(even of .team-card):hover .team-card__description {
        /* transform: translateX(110%) translateY(0%); */
        transform: translateX(20px);
        width: 100%;
        /* transition:
            width 300ms,
            transform 500ms 100ms; */
    }

    .team-card:hover .team-card__text {
        visibility: visible;
        opacity: 1;
        transition: opacity 500ms 300ms;
    }
</style>
