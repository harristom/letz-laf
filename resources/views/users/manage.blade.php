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
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        margin: 0;
        padding: 0;
        background-color: #f2f4f6;
    }

    .users-manage-container__header{
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .users-manage-container__table{
        width: 80%;
        margin: 0 auto;
    }

    .users-manage-container__table td,
    .users-manage-container__table th {
        width: 100%;
        padding: 15px 0;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    /*select the second td and th*/
    .users-manage-container__table--title th:nth-child(2),
    .users-manage-container__table--tr--two td:nth-child(2){
        width: 20%;
    }
    
    .users-manage-container__table--tr--one {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background-color: #fffefe;
    }
    
    .users-manage-container__table--title {
        display: flex;
        flex-direction: row;
    }
    
    .users-manage-container__table--tr--two {
        display: flex;
        flex-direction: row;
        background-color: #fffefe;
    }

    .users-manage-container__table--tr--two:nth-child(even) {
        background-color: #f2f4f6;
    }
    /*.users-manage-container__table--tr--two:hover{
        background-color: #f2f4f6;
    }*/
    
    .users-manage-container__table--btn {
        background: rgb(252,121,69);
        background: linear-gradient(310deg, rgba(252,121,69,0.8939950980392157) 45%, rgba(252,192,69,0.8715861344537815) 100%);
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .users-manage-container__table--img{
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

</style>