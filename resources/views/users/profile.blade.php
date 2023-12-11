@extends('layout')

@section('content')
    <div class="profile-card">

        <div class="profile-card__picture">
            <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/profilePicturePlaceholder.jpeg') }}" alt="">
            <h3>
                {{$user->first_name}} {{$user->last_name}} <br>
                <small>{{$user->role}}</small>
            </h3>

            @if(auth()->check() && auth()->user()->id == $user->id)
                <div>
                    <a class="{{ request()->is('profile/'.$user->id) ? 'active' : '' }}" href="/profile/{{$user->id}}">Account Details</a>

                    <a class="{{ request()->is('profile/'.$user->id.'/edit') ? 'active' : '' }}" href="/profile/{{$user->id}}/edit">Account Settings</a>

                    <div>
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="profile-card__picture__btn">
                                <i class="fa-solid fa-door-closed"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endif
        </div>

        <div class="profile-card__info">
            @yield('information')
        </div>

    </div>

@endsection

<style>

   .profile-card__picture h3{
        font-size: 30px;
        text-align: center;
    }

   .profile-card__picture h3 small{
        font-size: 18px;
        font-weight: 100;
    }

   .profile-card__picture a,.profile-card__picture div{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 190px;
        gap: 5px;
        border-radius: 5px;
        text-decoration: none;
        color: black;
    }

   .profile-card__picture div a,.profile-card__picture div div{
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 15px 0;
        border: 1px solid var(--primary-color);
        cursor: pointer;
    }

   .profile-card__picture div div form{
        margin-bottom: 0;
    }

   .profile-card__picture div a.active {
        background-color: var(--primary-color);  
        color: white;
    }

   .profile-card {
        width: 70%;
        display: flex;
        flex-direction: row;
        gap: 20px;
        margin: 20px auto;
    }

   .profile-card__picture{
        width: 30%;
        padding-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 3px; 
    }

   .profile-card__picture img{
        width: 150px;
        height: 150px;
        border-radius: 100%;
        border: 2px outset var(--primary-color);
    }

   .profile-card__info{
        width: 70%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 3px;
        padding-top: 30px;
    }

    .profile-card__picture__btn{
        background-color: transparent;
        border: none;
        font-size: 16px;
        cursor: pointer;
    }

</style>