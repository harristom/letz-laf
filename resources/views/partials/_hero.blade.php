<!-- Hero -->
<section>
    <div style="background-image: url('images/runvideo.mp4')"></div>

    <div>
        <h1>
            Welcome to <span>L&euml;tzLaf</span>
        </h1>
        <p>
            Hosting Fun Run Events Near you!
        </p>
        <div>
            @auth
                <a href="/events/create">
                    Join an Event!
                </a>
            @else
                <a href="/register">
                    Sign Up to Join an Event!
                </a>
            @endauth
        </div>
    </div>
</section>
