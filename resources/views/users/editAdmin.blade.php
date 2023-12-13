@extends('layout')

@section('content')
    <div class="edit-user">
        <header class="edit-user__header">
            <h2 class="edit-user__header-h2">Edit User: {{$user->first_name}} {{$user->last_name}}</h2>
        </header>
        <form class="edit-user__form" action="/users/{{$user->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="edit-user__form-div-name">
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="{{$user->first_name}}" />
                    @error('first_name')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="{{$user->last_name}}" />
                    @error('last_name')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="edit-user__form-div-info">
                <div>
                    <label for="birthdate">Date of birth</label>
                    <input type="date" name="birthdate" id="birthdate" value="{{$user->birthdate}}" />
                    @error('birthdate')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="profile_picture" >Profile picture</label>
                    <input type="file" id="profile_picture" name="profile_picture"/>
                    @error('profile_picture')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="edit-user__form-div">
                <label>Gender</label>
                <div class="edit-user__gender">
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
                    <p class="errors">{{ $message }}</p>
                @enderror
            </div>
            <div class="edit-user__form-div-email">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{$user->email}}" />
                    @error('email')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="role">Role</label>
                    <select name="role" id="role">
                        <option value="Member" {{ $user->role === 'Member' ? 'selected' : '' }}>Member</option>
                        <option value="Organiser" {{ $user->role === 'Organiser' ? 'selected' : '' }}>Organiser</option>
                        <option value="Admin" {{ $user->role === 'Admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="edit-user__form-div-password">
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="" />
                    @error('password')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" value="" />
                    @error('password_confirmation')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="edit-user__form-div-btn">
                <button>Update</button>
                <a href="/users/manage"> Back </a>
            </div>
        </form>
    </div>
@endsection


<style>

    .edit-user {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .edit-user__header {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px 0 20px 0;
    }

    .edit-user__header-h2{
        font-size: 40px;
        font-weight: 700;
    }

    .edit-user__form {
        width: 70%;
        margin: 20px auto 30px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .edit-user__form-div {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin: 0 0 30px 0;
        width: 500px;
    }


    .edit-user__form-div-name, 
    .edit-user__form-div-info,
    .edit-user__form-div-password,
    .edit-user__form-div-email
    {
        width: 500px;
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .edit-user__form-div-email div:nth-child(1){
        width: 70%;
    }
    .edit-user__form-div-email div:nth-child(2){
        width: 30%;
    }

    .edit-user__form-div-name div, 
    .edit-user__form-div-info div, 
    .edit-user__form-div-password div,
    .edit-user__form-div-email div{
        width: 250px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 30px;
    }

    .edit-user__form-div-btn{
        margin: 20px; 
    }

    .edit-user__form-div-btn a{
        padding-left: 40px; 
    }

    .edit-user__gender {
        display: flex;
        gap: 10px;
    }

</style>