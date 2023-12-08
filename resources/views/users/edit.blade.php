@extends('users.profile')

@section('information')
    <div class="user-edit-container">
        <header class="user-edit-container__header">
            <h2 class="user-edit-container__header-h2">Account Settings</h2>
        </header>
        <form action="{{ url('profile/' . $user->id) }}" method="post"  enctype="multipart/form-data" class="user-edit-container__form">
            {{-- ! added enctype to make sure the form can handle images --}}
            @csrf
            @method('PUT')
            <div class="user-edit-container__form-div-name">
                {{--without this the role can't be stored--}}
                <input type="hidden" name="role" value="{{$user->role}}">

                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="{{$user->first_name}}" />
                    @error('first_name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="{{$user->last_name}}" />
                    @error('last_name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="user-edit-container__form-div-info">
                <div>
                    <label for="birthdate">Date of birth</label>
                    <input type="date" name="birthdate" id="birthdate" value="{{$user->birthdate}}" />
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
            <div class="user-edit-container__form-div">
                <label>Gender</label>
                <div>
                    <label>
                        <input type="radio" name="gender" value="male" {{ $user->gender === 'Male' ? 'checked' : '' }}>
                        Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="female"
                            {{ $user->gender === 'Female' ? 'checked' : '' }}>
                        Female
                    </label>
                    <label>
                        <input type="radio" name="gender" value="prefer_not_to_say"
                            {{ $user->gender === 'Prefer_not_to_say' ? 'checked' : '' }}>
                        Prefer not to say
                    </label>
                </div>
                @error('gender')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="user-edit-container__form-div">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{$user->email}}" />
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="user-edit-container__form-div-password">
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" />
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="user-edit-container__form-div-btn">
                <button>Update</button>
            </div>
        </form>
    </div>
    
@endsection

<style>

    .user-edit-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .user-edit-container__header {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .user-edit-container__header-h2{
        margin: 0;
        font-family: "Inter", sans-serif;
        font-size: 40px;
        font-weight: 700;
        color: var(--primary-color);
    }

    .user-edit-container__form {
        width: 70%;
        margin: 20px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .user-edit-container__form-div {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin: 0 0 30px 0;
        width: 500px;
    }

    .user-edit-container__form-div-name, 
    .user-edit-container__form-div-info,
    .user-edit-container__form-div-password{
        width: 500px;
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .user-edit-container__form-div-name div, 
    .user-edit-container__form-div-info div, 
    .user-edit-container__form-div-password div{
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

    .user-edit-container__form-div-btn{
        margin: 10px auto;
        text-align: center;
        width: 150px;
    }

    .user-edit-container__form-div-p{
        width: 30%;
        text-align: center;
        margin: 0 auto -20px auto;
    }


</style>
