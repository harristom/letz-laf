<?php
$uniqueUsers = [];
?>

<table>
    <thead>
        <tr class="manage-users-title">
            <th>Ranking</th>
            <th>First Name</th>
            <th>Last Name</th>
            {{-- <th>Event Title</th> --}}
            <th>Finish Time</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($event->results as $index => $result)
            {{-- Check if the user for this event is already displayed --}}
            @if (!isset($uniqueUsers[$result->user->id]))
                <tr class="manage-users-list">
                    <td>{{ $index + 1 }}</td> {{-- Display index + 1 as the ranking --}}
                    <td>{{ $result->user->first_name }}</td>
                    <td>{{ $result->user->last_name }}</td>
                    {{-- <td>{{ $result->event->name }}</td> --}}
                    <td>{{ sprintf('%02d:%02d:%02d', $result->finish_time / 3600, ($result->finish_time / 60) % 60, $result->finish_time % 60) }}
                    </td>
                </tr>
                <?php $uniqueUsers[$result->user->id] = true; ?>
            @endif
        @endforeach
    </tbody>
</table>
