$(document).ready(function () {
    // Load records on page load
    fetchRecords();

    // Fetch records dynamically on search
    $("#searchForm").on("submit", function (e) {
        e.preventDefault();
        fetchRecords($("#searchInput").val());
    });

    function fetchRecords(searchTerm = '') {
        $.ajax({
            url: 'fetch_records.php',
            type: 'POST',
            data: { search: searchTerm },
            beforeSend: function () {
                $("#recordTable").html("<tr><td colspan='5' class='text-center'>Loading...</td></tr>");
            },
            success: function (data) {
                $("#recordTable").html(data);
            },
            error: function () {
                $("#recordTable").html("<tr><td colspan='5' class='text-center text-danger'>Error fetching records</td></tr>");
            }
        });
    }
});
