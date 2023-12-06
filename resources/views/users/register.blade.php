@extends('layout')

@section('content')
   
    <header>
        <h2>Register</h2>
        <p>Create an account to participate!</p>
    </header>
    <form action="/users" method="post"  enctype="multipart/form-data">
        {{-- ! added enctype to make sure the form can handle images --}}
        @csrf
        <div>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" />
            @error('first_name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" />
            @error('last_name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="birthdate">Date of birth</label>
            <input type="date" name="birthdate" id="birthdate" value="{{ old('birthdate') }}" />
            @error('birthdate')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Gender</label>
            <div>
                <label>
                    <input type="radio" name="gender" value="male" {{ old('gender') === 'male' ? 'checked' : '' }}>
                    Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female"
                        {{ old('gender') === 'female' ? 'checked' : '' }}>
                    Female
                </label>
                <label>
                    <input type="radio" name="gender" value="prefer_not_to_say"
                        {{ old('gender') === 'prefer_not_to_say' ? 'checked' : '' }}>
                    Prefer not to say
                </label>
            </div>
            @error('gender')
                <p>{{ $message }}</p>
            @enderror
        </div>
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
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" />
        </div>

        {{-- Adding section for profile picture image upload --}}
        <div>
            <label for="profile_picture" >Profile picture</label>
            <input type="file" name="profile_picture"/>
        </div>
        
        <div>
            <button>Sign Up</button>
        </div>
        <div>
            <p>
                Already have an account?
                <a href="/login">Login</a>
            </p>
        </div>
    </form>
    <div>
        <p>
            Already have an account?
            <a href="/login">Login</a>
        </p>
    </div>

    <div>
        <p> By becoming a member, you agree to LëtzLaf's <a href="/terms-and-conditions">Terms and Conditions</a></p>
    </div>
@endsection
