const plus = $('#plus');
let limit = 5;

function loadArticles(newLimit) {
    $('#loadingSpinner').show();
    $.ajax({
        url: "/recentArticlesWithLimit/" + newLimit,
        method: "GET",
        success: function (data) {
            if (data) {
                $('#loadingSpinner').hide();
                $('.homePreview').html(data);
            } else {
                console.log('No data :(');
            }
        },
        error: function () {
            console.error("Failed to fetch articles.");
        }
    });
}

$(document).ready(function () {
    loadArticles(limit);
});

plus.on('click', function () {
    limit += 1;
    console.log(limit)
    loadArticles(limit);
});
