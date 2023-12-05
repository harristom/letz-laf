@extends('layout')

@section('content')
    <header>
        <h2>User List</h2>
        {{--search bar--}}
    </header>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Profile</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($users as $user)
                    <td>{{$user->id}}</td>
                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                        <form action="/users/{{ $user->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>
                                <i class="fa-solid fa-trash"></i> 
                                Delete
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="/users/{{ $user->id }}/edit">
                            <button>
                                <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                            </button>
                        </a>
                    </td>
                @endforeach    
            </tr>
        </tbody>
    </table>
@endsection