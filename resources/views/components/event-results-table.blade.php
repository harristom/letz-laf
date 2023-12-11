<table id="table">
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
        @foreach ($event->results as $index => $result)
            <tr class="manage-users-list">
                <td>{{ $index + 1 }}</td> {{-- Display index + 1 as the ranking --}}
                <td>{{ $result->user->first_name }}</td>
                <td>{{ $result->user->last_name }}</td>
                <td>{{ $result->event->name }}</td>
                <td>{{ sprintf('%02d:%02d:%02d', $result->finish_time / 3600, ($result->finish_time / 60) % 60, $result->finish_time % 60) }}
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>

@include('partials._search')

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


