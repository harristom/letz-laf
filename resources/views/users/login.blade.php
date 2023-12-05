@extends('layout')

@section('content')
    <header>
        <h2>Log in</h2>
        <p>Log into your account to sign up to events!</p>
    </header>
    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" />
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}" />
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button>Sign In</button>
        </div>
        <div>
            <p>
                Don't have an account?
                <a href="/register">Register</a>
            </p>
        </div>
    </form>
@endSection
