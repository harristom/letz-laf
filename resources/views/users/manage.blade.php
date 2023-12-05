@extends('layout')

@section('content')
    <header class="manage-header">
        <h2>Manage Users</h2>
        <a href="/users/create">Add User</a>
    </header>
    <table>
        <thead>
            <tr class="manage-users-search">
                <th>User List</th>
                <th>
                    {{--search bar--}}
                </th>
            <tr>
            <tr class="manage-users-title">
                <th>ID</th>
                <th>Profile</th>
                <th>Email</th>
                <th>Role</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="manage-users-list">
                    <td>
                        <p>{{$user->id}}</p>
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
                            <button class="btn-manage">
                                <i class="fa-solid fa-trash"></i> 
                                Delete
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="/users/{{ $user->id }}/edit">
                            <button class="btn-manage">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
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

    .manage-header{
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    table{
        width: 80%;
        margin: 0 auto;
    }

    td,th {
        width: 100%;
        padding: 15px 0;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .manage-header {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    
    .manage-users-search {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background-color: #fffefe;
    }
    
    .manage-users-title {
        display: flex;
        flex-direction: row;
    }
    
    .manage-users-list {
        display: flex;
        flex-direction: row;
        background-color: #fffefe;
    }

    .manage-users-list:hover{
        background-color: #f2f4f6;
    }
    
    .btn-manage {
        background: rgb(252,121,69);
        background: linear-gradient(310deg, rgba(252,121,69,0.8939950980392157) 45%, rgba(252,192,69,0.8715861344537815) 100%);
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

</style>