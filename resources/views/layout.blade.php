<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- AlpineJS --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    {{-- Leaflet Geosearch https://smeijer.github.io/leaflet-geosearch/ --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.11.0/dist/geosearch.css" />
    <script src="https://unpkg.com/leaflet-geosearch@3.11.0/dist/geosearch.umd.js"></script>
    {{-- Google Fonts --}}
    <link
        href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic"
        rel="stylesheet" />
    <style>
        /* Base styles */
        :root {
            --page-bg: #f7f4eb;
            --primary-color: #ee5c35;
            --card-bg: white;
        }

        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--page-bg)
        }

        main {
            max-width: 1500px;
            margin: 0 auto;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
        }

        a:hover {
            text-decoration: underline;
        }

        button,
        input[type="button"],
        input[type="submit"],
        input::file-selector-button,
        .button {
            font-family: inherit;
            border: none;
            color: var(--card-bg);
            padding: 10px 20px;
            border-radius: 2px;
            cursor: pointer;
            text-transform: uppercase;
            border-color: var(--primary-color);
            border-style: solid;
            border-width: 2px;
            /* I know this is crazy but it fixes the flicker */
            /* The bg color is orange with a 0% width solid white "gradient" on top */
            /* The gradient grows to 100% width on hover */
            background-color: var(--primary-color);
            background-image: linear-gradient(white 0 0);
            background-size: 0% 100%;
            background-repeat: no-repeat;
            transition: 175ms;
            font-size: 0.9rem;
            text-decoration: none;
        }

        button:hover,
        input[type="button"]:hover,
        input[type="submit"]:hover,
        input::file-selector-button:hover,
        .button:hover {
            background-size: 100% 100%;
            color: var(--primary-color);
            text-decoration: none;
        }

        ul {
            list-style: none;
        }

        /* Fix leaflet styles */

        .leaflet-container a:hover {
            text-decoration: none;
        }
        /* --- */
      /*  nav {
            display: flex;
        }

        ul {
            display: flex;
            gap: 50px;
        }

        .profilePicture {
            height: 100px;
            width: 100px;
            border-radius: 50%;
        }

        .logo {
            height: 100px;
            width: 100px;
            border-radius: 50%;
        }
        */

        /*-------input fields------*/
        input[type=text],
        input[type=email],
        input[type=password],
        input[type=date],
        input[type=textarea],
        input[type=number],
        input[type="datetime-local"],
        textarea {
            font-family: inherit;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid lightgray;
        }

        /*-------radio buttons------*/
        input[type=radio]:checked {
            accent-color: var(--primary-color);
        }

        /*-------file upload------*/
        input[type=file] {
            padding: 10px 10px 8px 10px;
            border-radius: 3px;
            border: 1px solid lightgray;
        }

        input::file-selector-button {
            border: thin solid var(--primary-color);
            padding: 5px 10px;
            text-transform: none;
            margin-right: 10px;
        }

        /*-------select option------*/
        select {
            border: 1px solid lightgray;
            padding: 10px;
            border-radius: 3px;
        }

        /*-----------table-----------*/

        table{
            width: 80%;
            margin: 0 auto;
        }

        table th,
        table td {
            padding: 15px 0;
            text-align: center;
        }

        table tr{
            background-color: transparent;
        }

        tr:nth-child(1) {
            background-color: transparent;
        }

        tr:nth-child(2) {
            background-color: white;
        }
        
        td:nth-child(even){
            background-color: transparent;
        }


    </style>
    <title>LëtzLaf</title>
</head>

<body>
    <nav>
        <a href="/">
            <img class="logo" src="{{ asset('images/letzlogo.png') }}" alt="" />
        </a>
        <ul>
            <li>
                <a href="/events">Events</a>
            </li>
            <li>
                <a href="/news">News</a>
            </li>
            <li>
                <a href="{{ route('about') }}">About Us</a>
            </li>
            @auth
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button>
                            <i class="fa-solid fa-door-closed"></i>
                            Logout
                        </button>
                    </form>
                </li>
                <li>
                    <a href="/profile/{{auth()->user()->id}}">
                        {{ auth()->user()->first_name }} {{auth()->user()->last_name}}
                        <img class="profilePicture" src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : asset('images/profilePicturePlaceholder.jpeg') }}">
                    </a>
                </li>
            @else
                <li>
                    <a href="/register">
                        <i class="fa-solid fa-user-plus"></i>
                        Register
                    </a>
                </li>
                <li>
                    <a href="/login">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login
                    </a>
                </li>
            @endauth
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>

    {{-- <x-flash-message /> --}}

    <footer>
        <p>Copyright &copy; 2023, All Rights reserved</p>
    </footer>
</body>

</html>
