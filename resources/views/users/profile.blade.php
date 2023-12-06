@extends('layout')

@section('content')
    <div class="profile">

        <div class="profile-picture">
            <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/profilePicturePlaceholder.jpeg') }}" alt="">
            <h3>{{$user->first_name}} {{$user->last_name}}</h3>
            <div>
                <div class="{{ request()->is('profile/'.$user->id) ? 'active' : '' }}">
                    <a href="/profile/{{$user->id}}">Account Details</a>
                </div>
                <div class="{{ request()->is('profile/'.$user->id.'/edit') ? 'active' : '' }}">
                    <a href="/profile/{{$user->id}}/edit">Account Settings</a>
                </div>
                <div>
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="btn-logout-profile">
                            <i class="fa-solid fa-door-closed"></i>
                            Logout
                        </button>
                    </form>
                </div>
                
            </div>
        </div>

        <div class="profile-info">
            @yield('information')
        </div>

    </div>

@endsection

<style>
    .profile-picture h3{
        font-size: 30px;
    }

    .profile-picture div{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 190px;
        gap: 5px;
        border-radius: 5px; 
    }

    .profile-picture div div{
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 15px 0;
        border: 1px solid orange;
        cursor: pointer;
    }

    .profile-picture div div form{
        margin-bottom: 0;
    }

    .profile-picture div div a{
        text-decoration: none;
        color: black;
        font-size: 18px;
    }

    .profile {
        width: 70%;
        display: flex;
        flex-direction: row;
        gap: 20px;
        margin: 20px auto;
    }

    .profile-picture{
        width: 30%;
        padding-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 20px; 
        box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
    }

    .profile-picture img{
        width: 150px;
        height: 150px;
        border-radius: 100%;
        border: 2px outset orange;
    }

    .profile-info{
        width: 70%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
        padding-top: 30px;
    }

    .btn-logout-profile{
        background-color: transparent;
        border: none;
        font-size: 16px;
    }

    .profile-picture div div.active {
        background-color: orange;  
    }

    .profile-picture div div.active a{
        color: white;
    }
</style>