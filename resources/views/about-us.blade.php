@extends('layout')

@section('content')
    <h2 class="top-section__title">
        <span class="top-section__title--black-color">About </span><span class="top-section__title--main-color">us</span>
    </h2>

    <div class="aboutus__container">

        <div class="intro">
            <div class="intro__text">
                <h3 class="intro__text-title">Nice to meet you</h3>
                <p class="intro__text-content">LetzLaf is brought to you by a dynamic team of web developers, highly trained by Cap4Lab and ready to conquer the market. Armed with the latest skills and technologies, we bring innovation and excellence to every project. Get ready for a transformative digital experience with our expert team at the helm.</p>
            </div>

            <img class="intro__picture" src="{{ asset('images/brainstormingSession.jpg') }}"
                alt="picture of a brain storming session">

        </div>

        <div class="team-cards">

            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/jaria.jpg') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Jaria</h3>
                        <p class="team-card__bio">Having built a background in finance with years of experience, I've
                            shifted my focus to coding, driven by a passion for technology and the dynamic opportunities it
                            presents. This move represents a personal and strategic decision to diversify from finance,
                            aiming to uniquely contribute to today's tech-centric landscape through coding skills.</p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="www.linkedin.com/in/jariapoba"><i
                                    class="fa-brands fa-linkedin fa-2xl"></i></a>

                            <a class="team-card__portfolio-link" href="#"> <i
                                    class="fa-brands fa-github fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/kameron.png') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Kameron</h3>
                        <p class="team-card__bio">
                            Hello, my name is Kameron, and I'm enthusiastically exploring the realm of full-stack web
                            development. With a strong background in healthcare, I'm transitioning into software
                            development, driven by my passion for leveraging technology to elevate wellness. I skillfully
                            manage a nurturing role alongside a deep fascination for database intricacies, eagerly
                            anticipating flourishing at the intersection of health and software development.</p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="https://www.linkedin.com/in/kamerona/"><i
                                    class="fa-brands fa-linkedin fa-2xl"></i></a>

                            <a class="team-card__portfolio-link" href="#"> <i
                                    class="fa-brands fa-github fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/marcia.png') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Márcia</h3>
                        <p class="team-card__bio">
                            Hello, I'm Márcia, a 29-year-old who recently took the plunge into the world of development just four months ago. Coding has quickly become my passion, and I'm excited about the journey ahead. Outside of the digital realm, I enjoy the simple pleasure of taking walks in various locations, embracing the beauty of each moment. With a mix of technical curiosity and an appreciation for life's little joys, I'm navigating this new chapter with enthusiasm and a sense of adventure.
                        </p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="#"><i
                                    class="fa-brands fa-linkedin fa-2xl"></i></a>

                            <a class="team-card__portfolio-link" href="#"> <i
                                    class="fa-brands fa-github fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/tom.jpg') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Tom</h3>
                        <p class="team-card__bio">
                           I have roughly 10 years' experience in the tech sector, working as a translator and then PM in localisation for an international online retailer. I am now pursuing a career as a developer and have spent the last 4 months studying full time to develop my skills and am excited to continue learning. In my free time I like to read or to go see old movies at the city Cinémathèque. In the summer I enjoy going on cycle rides and runs to explore the beautiful forests, hills, rivers and valleys across the country.
                        </p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="http://tsharris.co.uk"><i
                                    class="fa-brands fa-linkedin fa-2xl"></i></a>

                            <a class="team-card__portfolio-link" href="https://github.com/harristom"> <i
                                    class="fa-brands fa-github fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <img class="team-card__picture" src="{{ asset('images/vania.jpg') }}" alt="">
                <div class="team-card__description">
                    <div class="team-card__text">
                        <h3 class="team-card__title">Vânia</h3>
                        <p class="team-card__bio">With a four-year technical background in computer science,
                            I embarked on this course to deepen my passion for programming.
                            The solid foundation I gained in technical school equipped me with essential skills,
                            and I am dedicated to exploring and applying this knowledge in more advanced ways.
                            I look forward to continuing my journey in technology and am eager to seek creative ways to
                            contribute to the digital world.</p>
                        <div class="team-card__socials">
                            <a class="team-card__linkedin-link" href="https://www.linkedin.com/in/vânia-daniela-silva-barbosa"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                            <a class="team-card__portfolio-link" href="https://github.com/VaniaSilvaBarbosa"> <i class="fa-brands fa-github fa-2xl"></i></a>
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
        margin: 50px 5px;
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
        font-size: 1.1em;
        line-height: 1.5;
    }

    .team-card__socials {
        display: flex;
        gap: 8px;
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
