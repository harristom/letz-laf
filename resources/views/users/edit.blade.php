@extends('layout')

@section('content')
    <header>
        <h2>Edit User {{$user->first_name}} {{$user->last_name}}</h2>
    </header>
    <form action="/users/{{$user->id}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" value="{{$user->first_name}}" />
        </div>
        @error('first_name')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" value="{{$user->last_name}}" />
        </div>
        @error('last_name')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <label for="birthdate">Date of birth</label>
            <input type="date" name="birthdate" id="birthdate" value="{{$user->birthdate}}" />
        </div>
        @error('birthdate')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <label>Gender</label>
            <div>
                <label>
                    <input type="radio" name="gender" value="male" {{ $user->gender === 'Male' ? 'checked' : '' }}>
                    Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female" {{ $user->gender === 'Female' ? 'checked' : '' }}>
                    Female
                </label>
                <label>
                    <input type="radio" name="gender" value="prefer_not_to_say" {{ $user->gender === 'Prefer not to say' ? 'checked' : '' }}>
                    Prefer not to say
                </label>
            </div>
        </div>
        @error('gender')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{$user->email}}" />
        </div>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="" />
        </div>
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <div>
            <button>Update</button>
            <a href="/users/manage"> Back </a>
        </div>
    </form>
@endsection