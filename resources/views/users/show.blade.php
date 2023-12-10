@extends('users.profile')

@section('information')

    <header class="profile-card__info__header">
        <h3>Account Details</h3>
    </header>

    <div class="profile-card__info__item">
        <div>
            <h3>First Name</h3>
            <p>{{$user->first_name}}</p>
        </div>
        <div>
            <h3>Last Name</h3>
            <p>{{$user->last_name}}</p>
            
        </div>
    </div>
    <div class="profile-card__info__item">
        <div>
            <h3>Date Of Birth</h3>
            <p>{{date("F j, Y", strtotime($user->birthdate)) }}</p>
        </div>
        <div>
            <h3>Gender</h3>
            <p>{{$user->gender}}</p>
        </div>
    </div>
    <div class="profile-card__info__item profile-card__info__item-password">
        <div>
            <h3>Email</h3>
            <p>{{$user->email}}</p>
        </div>
        <div>
            <h3>Password</h3>
            <p>**********</p>
        </div>
    </div>

@endsection

<style>
    .profile-card__info__header{
        width: 100%;
        text-align: center;
        padding: 0 0 40px 0;
        color: var(--primary-color);
        font-size: 25px;
    }

    .profile-card__info__item{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 30px;
        padding: 0 20px 40px 20px;
    }

    .profile-card__info__item div{
        display: flex;
        flex-direction: column;
        width: 300px;
    }

    .profile-card__info__item h3{
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .profile-card__info__item #gender{
        padding-bottom: 20px;
        margin-bottom: 0;
    }

    .profile-card__info__item p{
        padding: 10px;
        font-size: 15px;
        border-radius: 10px;
    }

</style>
