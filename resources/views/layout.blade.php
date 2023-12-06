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
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="" ></script>
    {{-- Leaflet Geosearch https://smeijer.github.io/leaflet-geosearch/ --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.11.0/dist/geosearch.css" />
    <script src="https://unpkg.com/leaflet-geosearch@3.11.0/dist/geosearch.umd.js"></script>
    <style>
        footer {
            background-color: orange;
        }

        nav{
            display: flex;
        }

        ul{
            list-style: none;
            display: flex;

            gap: 50px;
        }

        .profilePicture{
            height: 100px;
            width: 100px;
            border-radius: 50%;
        }
        .logo {
            height: 100px;
            width: 100px;
            border-radius: 50%;
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
                <a href="{{Route('about')}}">About Us</a>
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
                    <a href="/profile">
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
