@extends('users.profile')

@section('information')

    <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="profile-info-item-name">
            <div>
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="{{$user->first_name}}">
                @error('first_name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="{{$user->last_name}}">
                @error('last_name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="profile-info-item">
            <div>
                <label for="birthdate">Date Of Birth</label>
                <input type="date" id="birthdate" name="birthdate" value="{{$user->datebirth}}">
                @error('birthdate')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="gender" id="gender">Gender</label>
                <div class="gender">
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
                @error('gender')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="profile_picture">Picture</label>
                <input type="file" id="profile_picture" name="profile_picture">
                @error('profile_picture')
                    <p>{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="profile-info-item-address">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{$user->email}}">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="update-btn">
            <button>UPDATE</button>
        </div>

    </form>
@endsection

<style>

    /*----------names/address section-----------*/
    .profile-info-item-name, .profile-info-item-address{
        width: 550px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .profile-info-item-name div, .profile-info-item-address div{
        display: flex;
        flex-direction: column;
        width: 250px;
        padding: 5px 5px 20px 5px;
    }

    .profile-info-item-name label, .profile-info-item-address label{
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .profile-info-item-name input,  .profile-info-item-address input{
        padding: 10px;
        font-size: 15px;
        border-radius: 10px;
        border: 1px solid lightgray;
    }
    
    input::file-selector-button {
        font-weight: bold;
        color: white;
        background:orange;
        padding: 0.5em;
        border: thin solid orange;
        border-radius: 3px;
        cursor: pointer;
    }

    /*----------birthdate and gender section-----------*/
    .profile-info-item{
        width: 550px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }


    .profile-info-item div{
        display: flex;
        flex-direction: column;
        width: 540px;
        padding-bottom: 20px;
    }

    .profile-info-item label{
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .profile-info-item #gender{
        padding-bottom: 20px;
        margin-bottom: 0;
    }

    .profile-info-item input{
        padding: 10px;
        font-size: 15px;
        border-radius: 10px;
        border: 1px solid lightgray;
        cursor: pointer;
    }

    div.gender{
        display: flex;
        flex-direction: row;
        padding-bottom: 0;
    }

    div.gender label{
        margin-right: 20px;
        align-items: center;
    }

    input[type=radio]:checked{
        accent-color: #FF0000; 
    }
    /*--------------BUTTON-------------*/
    .update-btn{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 10px 0 20px 0;
        transition: all .2s;
    }

    .update-btn button{
        cursor: pointer;
        width: 150px;
        border: none;
        padding: 10px;
        font-size: 18px;
        border-radius: 5px;
        color: white;
        background-color: orange;
    }

    .update-btn button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .update-btn button:active {
        transform: translateY(-1px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .update-btn button::after {
        display: inline-block;
        border-radius: 100px;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transition: all .4s;
    }

    .update-btn button::after {
        background-color: #fff;
    }

    .update-btn button:hover::after {
        transform: scaleX(1.4) scaleY(1.6);
        opacity: 0;
    }
 
</style>