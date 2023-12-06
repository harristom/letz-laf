@extends('layout')

@section('content')
    <div class="profile">

        <div class="profile-picture">
            <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/profilePicturePlaceholder.jpeg') }}" alt="">
            <h3>{{$user->first_name}} {{$user->last_name}}</h3>
        </div>

        <div class="profile-info">
            <div class="profile-info-item">
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" value="{{$user->first_name}}">
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="{{$user->last_name}}">
                    
                </div>
            </div>
            <div class="profile-info-item">
                <div>
                    <label for="datebirth">Date Of Birth</label>
                    <input type="date" id="datebirth" name="datebirth" value="{{$user->datebirth}}">
                </div>
                <div>
                    <label for="gender">Gender</label>
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
                </div>
            </div>
            <div class="profile-info-item">
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{$user->email}}">
                </div>
                {{--
                <div>
                    <h4>Password</h4>
                    <p>{{ str_repeat('*', strlen($user->password)) }}</p>
                </div>
                --}}
            </div>

        </div>
    </div>

@endsection

<style>
    .profile {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .profile-picture{
        width: 70%;
        padding-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .profile-picture img{
        width: 150px;
        height: 150px;
        border-radius: 100%;
    }

    .profile-info{
        width: 70%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: orange;
    }

    .profile-info-item{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    .profile-info-item div{
        display: flex;
        flex-direction: column;
        width: 350px;
        padding: 20px 20px 20px 0;
    }

    .profile-info-item label{
        font-weight: bold;
        font-size: 20px;
    }

    .profile-info-item input{
        padding: 10px;
        font-size: 15px;
        border-radius: 10px;
        border: 1px solid lightgray;
    }
    .gender{
        display: flex;
        flex-direction: column;
    }


</style>