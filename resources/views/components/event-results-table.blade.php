<style>
    .event-results-table__search {
        margin-bottom: 10px;
    }

    .event-results-table__table {
        width: 100%;
    }
</style>

<div class="event-results-table__search">@include('partials._search')</div>
<table id="table" class="event-results-table__table">
    <thead>
        <tr>
            <th>Ranking</th>
            <th>Name</th>
            <th>Finish Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($event->results as $index => $result)
            <tr class="manage-users-list">
                <td>{{ $index + 1 }}</td> {{-- Display index + 1 as the ranking --}}
                <td>
                    <a href="/profile/{{$result->user->id}}">
                        {{ $result->user->first_name }} {{ $result->user->last_name }}
                    </a>
                </td>
                <td>{{ sprintf('%02d:%02d:%02d', $result->finish_time / 3600, ($result->finish_time / 60) % 60, $result->finish_time % 60) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

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


