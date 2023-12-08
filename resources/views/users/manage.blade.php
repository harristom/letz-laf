@extends('layout')

@section('content')
    <div class="users-manage-container">
        <header class="users-manage-container__header">
            <h2>Manage Users</h2>
            <a href="/users/create">Add User</a>
        </header>
        <table class="users-manage-container__table">
            <thead>
                <tr class="users-manage-container__table--tr--one">
                    <th>User List</th>
                    <th>
                        {{--search bar--}}
                    </th>
                <tr>
                <tr class="users-manage-container__table--title">
                    <th>ID</th>
                    <th></th>
                    <th>Profile</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="users-manage-container__table--tr--two">
                        <td>
                            <p>{{$user->id}}</p>
                        </td>
                        <td>
                            <img class="users-manage-container__table--img" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/profilePicturePlaceholder.jpeg') }}">
                        </td>
                        <td>
                            <p>{{$user->first_name}} {{$user->last_name}}</p>
                        </td>
                        <td>
                            <p>{{$user->email}}</p>
                        </td>
                        <td>
                            <p>{{$user->role}}</p>
                        </td>
                        <td>
                            <form action="/users/{{ $user->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="users-manage-container__table--btn">
                                    <i class="fa-solid fa-trash"></i> 
                                    Delete
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="/users/{{ $user->id }}/edit">
                                <button class="users-manage-container__table--btn">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    Edit
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
    </div>
@endsection

<style>
    

    .users-manage-container__header{
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    
    /*select the second td and th*/
    .users-manage-container__table--title th:nth-child(2),
    .users-manage-container__table--tr--two td:nth-child(2){
        width: 20%;
    }
    
    .users-manage-container__table--title {
        display: flex;
        flex-direction: row;
    }

    .users-manage-container__table--img{
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

</style>