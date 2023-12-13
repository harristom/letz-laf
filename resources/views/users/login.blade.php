@extends('layout')

@section('content')
    <div class="login-container">
        <header class="login-container__header">
            <h2 class="login-container__header-h2">Log in</h2>
            <p class="login-container__header-p">Log into your account to sign up to events!</p>
        </header>
        <form action="/login" method="POST" class="login-container__form">
            @csrf
            <div class="login-container__form-div">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="errors">{{ $message }}</p>
                @enderror
            </div>
            <div class="login-container__form-div">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="{{ old('password') }}" />
                @error('password')
                    <p class="errors">{{ $message }}</p>
                @enderror
            </div>
            <div class="login-container__form-div">
                <button class="login-container__form-div-btn">Sign In</button>
            </div>
            <div class="login-container__form-div">
                <p class="login-container__form-div-p">
                    Don't have an account?
                    <a href="/register">Register</a>
                </p>
            </div>
        </form>
    </div>
@endsection

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
        margin: 125px 0px 70px 0px;
    }

    .login-container__header-h2{
        margin: 0;
        font-size: 40px;
        font-weight: 700;
        color: var(--primary-color);
    }

    .login-container__header-p{
        font-size: 15px;
        max-width: 100%;
        text-align: center;
        line-height: 1.1rem;
        padding: 20px 0 0 0;
    }

    .login-container__form {
        width: 550px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10px;
        margin-bottom: 125px;
    }

    .login-container__form-div {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin: 0 0 30px 0;
        width: 450px;
    }

    .login-container__form-div-btn{
        margin: 20px auto 0 auto;
        width: 150px;
    }

    .login-container__form-div-p{
        margin: 0 auto 0 auto;
        padding: 0;
    }

</style>
