@extends('layout')

@section('content')
    </div class="register-container">
        <header class="register-container__header">
            <h2 class="register-container__header--h2">Register</h2>
            <p class="register-container__header--p">Create an account to participate!</p>
        </header>
        <form action="/users" method="post"  enctype="multipart/form-data" class="register-container__form">
            {{-- ! added enctype to make sure the form can handle images --}}
            @csrf
            <div class="register-container__form--div--name">
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
            </div>
            <div class="register-container__form--div--info">
                <div>
                    <label for="birthdate">Date of birth</label>
                    <input type="date" name="birthdate" id="birthdate" value="{{ old('birthdate') }}" />
                    @error('birthdate')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                {{-- Adding section for profile picture image upload --}}
                <div>
                    <label for="profile_picture" >Profile picture</label>
                    <input type="file" id="profile_picture" name="profile_picture"/>
                    @error('profile_picture')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="register-container__form--div">
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
            
            <div class="register-container__form--div">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" />
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="register-container__form--div--password">
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
            </div>

            <div class="register-container__form--div--btn">
                <button>Sign Up</button>
            </div>
            <div class="register-container__form--div--p">
                <p>
                    Already have an account?
                    <a href="/login">Login</a>
                </p>
            </div>
            <div class="register-container__form--div--p">
                <p> By becoming a member, you agree to LëtzLaf's <a href="/terms-and-conditions">Terms and Conditions</a></p>
            </div>
        </form>
   <div>
    
@endsection

<style>

    .register-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .register-container__header {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .register-container__header--h2{
        margin: 0;
        font-family: "Inter", sans-serif;
        font-size: 40px;
        font-weight: 700;
        color: var(--primary-color);
    }

    .register-container__header--p{
        font-family: "Inter", sans-serif;
        font-size: 15px;
        max-width: 85%;
        text-align: center;
        line-height: 1.1rem;
        padding: 10px 0 20px 0;
    }

    .register-container__form {
        width: 70%;
        margin: 20px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .register-container__form--div {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin: 0 0 30px 0;
        width: 500px;
    }

    .register-container__form--div--name, 
    .register-container__form--div--info,
    .register-container__form--div--password{
        width: 500px;
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .register-container__form--div--name div, 
    .register-container__form--div--info div, 
    .register-container__form--div--password div{
        width: 250px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 30px;
    }

    /*BUTTONS*/
    
    button,
    input[type="button"],
    input[type="submit"],
    .button {
        display: inline-block;
        padding: 10px 20px;
        color: white;
        border-radius: 2px;
        text-transform: uppercase;
        border: 2px solid var(--primary-color);
        cursor: pointer;
        position: relative;
        background-color: var(--primary-color);
        overflow: hidden;
        z-index: 1;
    }

    button::before,
    input[type="button"]::before,
    input[type="submit"]::before,
    .button::before{
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        width: 101%;
        height: 100%;
        background-color: white;
        transform: translateX(-100%);
        transition: all .3s;
        z-index: -1;
    }

    button:hover::before,
    input[type="button"]:hover::before,
    input[type="submit"]:hover::before,
    .button:hover::before{
        transform: translateX(0);
        color: black;
    }

    button:hover,
    input[type="button"]:hover,
    input[type="submit"]:hover,
    .button:hover {
        color: black;
        filter: contrast(200%);
    }

    .register-container__form--div--btn{
        margin: 10px auto;
        text-align: center;
        width: 150px;
    }

    .register-container__form--div--p{
        width: 30%;
        text-align: center;
        margin: 0 auto -20px auto;
    }



</style>