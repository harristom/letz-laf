@extends('layout')

@section('content')
    <div class="users-manage-container">
        <header class="users-manage-container__header">
            <h2>Manage Users</h2>
            <a href="/users/create">Add User</a>
        </header>
        
        <div class="users-manage-container__table--search">
            @include('partials._search')
        </div>
        <table class="users-manage-container__table" id="table">
            <thead>
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

<script>
    // Add script after the DOM has loaded
    document.addEventListener('DOMContentLoaded', function () {
        // Get the search input element
        var input = document.getElementById('search-input');
        // Get the id table element
        var table = document.getElementById('table');
        // Get all the rows in the table
        var rows = table.getElementsByTagName('tr');

        // Add event listener for input changes
        input.addEventListener('input', function () {
            var filter = input.value.toLowerCase();

            // Loop through each row in the table
            for (var i = 1; i < rows.length; i++) {
                var row = rows[i];
                // Get all the cells in the current row
                var cells = row.getElementsByTagName('td');
                // Flag indicating whether the row should be shown
                var shouldShow = false;

                // Loop through each cell in the row
                for (var j = 0; j < cells.length; j++) {
                    var cell = cells[j];
                    // Check if the cell exists
                    if (cell) {
                        var text = cell.textContent.toLowerCase();
                        // Check if the cell text contains the filter
                        if (text.indexOf(filter) > -1) {
                            shouldShow = true;
                            break;
                        }
                    }
                }

                // Show or hide the row based on the filter
                if (shouldShow) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
</script>


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
        justify-content: space-between;
    }

    .users-manage-container__table--img{
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

</style>