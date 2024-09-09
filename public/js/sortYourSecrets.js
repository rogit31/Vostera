$(document).ready(function () {
    $('#loadingSpinner').show();

    function fetchArticles() {
        const search = $("#searchbarInline").val();
        const category = $("#category").val();
        const sort = $("#sort").val();

        $.ajax({
            url: '/sortUserSecrets',
            method: 'GET',
            data: {
                searchbar: search,
                category: category,
                sort: sort
            },
            success: function (response) {
                $('#loadingSpinner').hide();
                $(".allArticles").html(response);
            },
            error: function () {
                $(".allArticles").html("Failed to fetch articles.");
            }
        })
    }

    fetchArticles();
    $("#filterForm").on("input change", 'input, select', fetchArticles);
    $('#filterForm').on('submit', function (e) {
        e.preventDefault();
        fetchArticles();
    });
})