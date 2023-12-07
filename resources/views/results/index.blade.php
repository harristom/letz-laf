@extends('layout')

@section('content')
    <header class="manage-header">
        <h2>Results list</h2>
    </header>
    <table>
        <thead>
            <tr class="manage-users-title">
                <th>Ranking</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Event Title</th>
                <th>Finish Time</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($results as $index => $result)
                <tr class="manage-users-list">
                    <td>{{ $index + 1 }}</td> {{-- Display index + 1 as the ranking --}}
                    <td>{{ $result->user->first_name }}</td>
                    <td>{{ $result->user->last_name }}</td>
                    <td>{{ $result->event->name }}</td>
                    <td>{{ $result->converted_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

<style>
    /*CSS below is a temporary copy only from Vania's manage users style*/

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: #f2f4f6;
    }

    .manage-header {
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    table {
        width: 80%;
        margin: 0 auto;
    }

    td,
    th {
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

    .manage-users-list:hover {
        background-color: #f2f4f6;
    }

    .btn-manage {
        background: rgb(252, 121, 69);
        background: linear-gradient(310deg, rgba(252, 121, 69, 0.8939950980392157) 45%, rgba(252, 192, 69, 0.8715861344537815) 100%);
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
