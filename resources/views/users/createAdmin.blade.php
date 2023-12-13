@extends('layout')

@section('content')
   <div class="add-user">
        <header class="add-user__header">
            <h2 class="add-user__header-h2">Add a New User</h2>
            <p class="add-user__header-p">Create an account for an User!</p>
        </header>
        <form class="add-user__form" action="/users" method="post" enctype="multipart/form-data">
            @csrf
            <div class="add-user__form-div-name">
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
            <div class="add-user__form-div-info">
                <div>
                    <label for="birthdate">Date of birth</label>
                    <input type="date" name="birthdate" id="birthdate" value="{{ old('birthdate') }}" />
                    @error('birthdate')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="profile_picture">Profile picture</label>
                    <input type="file" id="profile_picture" name="profile_picture" />
                    @error('profile_picture')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="add-user__form-div">
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
            <div class="add-user__form-div">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" />
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="add-user__form-div-password">
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
            
            <div class="add-user__form-div-btn">
                <button>Create</button>
                <a href="/users/manage">Back</a>
            </div>
        </form>
   </div>
@endsection

<style>

    .add-user{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .add-user__header{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 30px 0 20px 0;
    }

    .add-user__header-h2{
        margin: 0;
        font-size: 40px;
        font-weight: 700;
        color: var(--primary-color);
    }

    .add-user__header-p{
        font-size: 15px;
        max-width: 85%;
        text-align: center;
        line-height: 1.1rem;
        padding: 10px 0 20px 0;
    }

    .add-user__form{
        width: 70%;
        margin: 20px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .add-user__form-div{
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin: 0 0 30px 0;
        width: 500px;
    }

    .add-user__form-div-name,
    .add-user__form-div-info,
    .add-user__form-div-password{
        width: 500px;
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .add-user__form-div-name div,
    .add-user__form-div-info div,
    .add-user__form-div-password div{
        width: 250px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 30px;
    }

    .add-user__form-div-btn{
        margin-bottom: 20px; 
    }

    .add-user__form-div-btn a{
        margin-left: 30px; 
    }

</style>