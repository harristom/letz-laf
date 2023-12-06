@extends('users.profile')

@section('information')

    <div class="profile-info-item">
        <div>
            <h3>First Name</h3>
            <p>{{$user->first_name}}</p>
        </div>
        <div>
            <h3>Last Name</h3>
            <p>{{$user->last_name}}</p>
            
        </div>
    </div>
    <div class="profile-info-item">
        <div>
            <h3>Date Of Birth</h3>
            <p>{{date("F j, Y", strtotime($user->birthdate)) }}</p>
        </div>
        <div>
            <h3>Gender</h3>
            <p>{{$user->gender}}</p>
        </div>
    </div>
    <div class="profile-info-item">
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

    .profile-info-item{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 30px;
        padding: 0 20px 40px 20px;
    }

    .profile-info-item div{
        display: flex;
        flex-direction: column;
        width: 300px;
    }

    .profile-info-item h3{
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .profile-info-item #gender{
        padding-bottom: 20px;
        margin-bottom: 0;
    }

    .profile-info-item p{
        padding: 10px;
        font-size: 15px;
        border-radius: 10px;
        border: 1px solid lightgray;
    }

    div.gender{
        display: flex;
        flex-direction: row;
        padding-bottom: 0;
    }

    div.gender h3{
        margin-right: 20px;
        align-items: center;
    }

</style>
