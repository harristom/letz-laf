@extends('layout')

@section('content')
    <div class="login-container">
        <header class="login-container__header">
            <h2 class="login-container__header--h2">Log in</h2>
            <p class="login-container__header--p">Log into your account to sign up to events!</p>
        </header>
        <form action="/login" method="POST" class="login-container__form">
            @csrf
            <div class="login-container__form--div">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" />
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="login-container__form--div">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="{{ old('password') }}" />
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="login-container__form--div">
                <button class="login-container__form--div--btn">Sign In</button>
            </div>
            <div class="login-container__form--div">
                <p class="login-container__form--div--p">
                    Don't have an account?
                    <a href="/register">Register</a>
                </p>
            </div>
        </form>
    </div>
@endSection

<style>
    
    .login-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .login-container__header {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .login-container__header--h2{
        margin: 0;
        font-family: "Inter", sans-serif;
        font-size: 40px;
        font-weight: 700;
        color: var(--primary-color);
    }

    .login-container__header--p{
        font-family: "Inter", sans-serif;
        font-size: 15px;
        max-width: 85%;
        text-align: center;
        line-height: 1.1rem;
        padding: 10px 0 20px 0;
    }

    .login-container__form {
        width: 500px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    .login-container__form--div {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin: 0 0 30px 0;
        width: 400px;
    }

    .login-container__form--div--btn{
        margin: 10px auto;
        width: 150px;
    }

    .login-container__form--div--p{
        margin: 0 auto 0 auto;
    }

    button,
        input[type="button"],
        input[type="submit"],
        .button {
            border: none;
            color: var(--card-bg);
            padding: 10px 20px;
            border-radius: 2px;
            cursor: pointer;
            text-transform: uppercase;
            border-color: var(--primary-color);
            border-style: solid;
            border-width: 2px;
            transition: background 200ms;
            background: linear-gradient(var(--primary-color) 0 0) right / 100% 100% no-repeat;
            transition: 175ms;
        }

        button:hover,
        input[type="button"]:hover,
        input[type="submit"]:hover,
        button:hover {
            background: linear-gradient(var(--primary-color) 0 0) right / 0% 100% no-repeat;
            color: var(--primary-color);
        }


</style>
