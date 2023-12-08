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
            <li>
                <a href="/events">Events</a>
            </li>
            <li>
                <a href="/news">News</a>
            </li>
            <li>
                <a href="/about">About Us</a>
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

<style>

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
        .button:hover {
            background-size: 100% 100%;
            color: var(--primary-color);
            text-decoration: none;
        }

        ul {
            list-style: none;
        }

    

        footer {
            background-color: #ee5c35;
            padding: 10px;
        }

        /*-------input fields------*/
        input[type=text],
        input[type=email],
        input[type=password],
        input[type=date],
        input[type=textarea] {
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
            font-weight: bold;
            color: white;
            background-color: var(--primary-color);
            border: thin solid var(--primary-color);
            border-radius: 3px;
            cursor: pointer;
        }

        /*-------select option------*/
        select {
            border: 1px solid lightgray;
            padding: 10px;
            border-radius: 3px;
        }


    table{
            width: 80%;
            margin: 0 auto;
        }

        table th,
        table td {
            width: 100%;
            padding: 15px 0;
            text-align: center;
        }

        table tr{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
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
