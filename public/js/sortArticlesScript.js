$(document).ready(function() {

    function fetchArticles() {
        const search = $("#searchbarInline").val();
        const category = $("#category").val();
        const sort = $("#sort").val();

        $.ajax({
            url: '/articleSort',
            method: 'GET',
            data: {
                searchbar: search,
                category: category,
                sort: sort
            },
            success: function (response) {
                console.log(response);
                $(".allArticles").html(response);
            },
            error: function () {
                alert("failed");
            }
        })
    }
        $("#filterForm").on("input change", 'input, select', fetchArticles);
        $('#filterForm').on('submit', function (e) {
            e.preventDefault();
            fetchArticles();
        });
})