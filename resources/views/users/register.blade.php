@extends('layout')

@section('content')
    <div class="register-container">
        <header class="register-container__header">
            <h2 class="register-container__header-h2">Register</h2>
            <p class="register-container__header-p">Create an account to participate!</p>
        </header>
        <form action="/users" method="post" enctype="multipart/form-data" class="register-container__form">
            {{-- ! added enctype to make sure the form can handle images --}}
            @csrf
            <div class="register-container__form-div-name">
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" />
                    @error('first_name')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" />
                    @error('last_name')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="register-container__form-div-info">
                <div>
                    <label for="birthdate">Date of birth</label>
                    <input type="date" name="birthdate" id="birthdate" value="{{ old('birthdate') }}" />
                    @error('birthdate')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="profile_picture">Profile picture</label>
                    <input type="file" id="profile_picture" name="profile_picture" />
                    @error('profile_picture')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="register-container__form-div">
                <label>Gender</label>
                <div class="register-container__form-div-gender">
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
                    <p class="errors">{{ $message }}</p>
                @enderror
            </div>
            <div class="register-container__form-div">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="errors">{{ $message }}</p>
                @enderror
            </div>
            <div class="register-container__form-div-password">
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="{{ old('password') }}" />
                    @error('password')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" />
                    @error('password')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="register-container__form-div-btn">
                <button>Sign Up</button>
            </div>
            <div class="register-container__form-div-p">
                <p>
                    Already have an account?
                    <a href="/login">Login</a>
                </p>
            </div>
            <div class="register-container__form-div-p">
                <p> By becoming a member, you agree to LëtzLaf's <a href="{{ Route('terms-and-cond') }}">Terms and Conditions</a></p>
            </div>
        </form>
    </div>
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
        margin: 30px;
    }

    .register-container__header-h2 {
        margin: 0;
        font-size: 40px;
        font-weight: 700;
        color: var(--primary-color);
    }

    .register-container__header-p {
        font-size: 15px;
        text-align: center;
        line-height: 1.1rem;
        padding: 10px 0 20px 0;
    }

    .register-container__form {
        width: 80%;
        margin: 10px auto 50px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .register-container__form-div {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin: 0 0 30px 0;
        width: 515px;
    }

    .register-container__form-div-name,
    .register-container__form-div-info,
    .register-container__form-div-password {
        width: 550px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 20px;
    }

    .register-container__form-div-name div,
    .register-container__form-div-info div,
    .register-container__form-div-password div {
        width: 250px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 30px;
    }

    .register-container__form-div-btn {
        margin: 10px auto;
        text-align: center;
        width: 150px;
    }

    .register-container__form-div-p {
        width: 50%;
        text-align: center;
        padding: 5px;
    }

    .register-container__form-div-gender label{
        padding: 0 25px 0 0; 
    }

</style>

