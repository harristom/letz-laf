<form action="">
    <div>
        <input type="text" name="search" id="search-input" placeholder="Search for a name...">
        {{-- <button type="submit">
            Search
        </button> --}}
    </div>
</form>


    {{-- <script>
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
</script> --}}
