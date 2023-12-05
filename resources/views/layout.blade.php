<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        footer {
            background-color: orange;
        }
    </style>
    <title>LëtzLaf</title>
</head>

<body>
    <nav>
        <a href="/">
            <img src="{{ asset('images/letzlogo.png') }}" alt="" />
        </a>
        <ul>
            @auth
                <li>
                    <span>
                        Welcome {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                    </span>
                </li>
                {{-- needs to be a specific user
                <li>
                    <a href="/events/manage">
                        <i class="fa-solid fa-gear"></i>Manage Events
                    </a>
                </li>
                --}}
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button>
                            <i class="fa-solid fa-door-closed"></i>
                            Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/news">News</a>
                </li>
                <li>
                    <a href="/about">About Us</a></li>
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

    {{--<x-flash-message />--}}

    <footer>
        <p>Copyright &copy; 2023, All Rights reserved</p>
    </footer>
</body>

</html>
