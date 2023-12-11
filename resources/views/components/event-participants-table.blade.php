<table>
    <thead>
        <tr class="manage-users-title">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Finish Time</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($event->participants as $participant)
            <tr class="manage-users-list"> 
                {{--action needed--}}
                <form action="" method="POST">
                    @csrf

                    {{-- to insert inside the database event_id and user_id--}}
                    <input type="hidden" name="user_id" value="{{ $participant->id }}">
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    {{--showing user info --}}
                    <td>{{ $participant->first_name }}</td>
                    <td>{{ $participant->last_name }}</td>
                    {{--input insert finish time of the runner--}}
                    <td>
                        <input type="text" name="finish_time" placeholder="HH:mm:ss">
                    </td>
                    {{-- send the information --}}
                    <td>
                        <button type="submit">Save</button>
                    </td>
                </form>                
            </tr>
        @endforeach
    </tbody>
</table>