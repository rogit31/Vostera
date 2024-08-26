const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');
const html = $('html');
const body = $('body');
const deleteButton = $('.deleteButton');

hamburger.addEventListener("click", (event) => {
    event.stopPropagation();
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    document.addEventListener('click', closeMenuOnClickOutside);
});

function closeMenuOnClickOutside(event) {
    if (!navMenu.contains(event.target) && !hamburger.contains(event.target)) {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
        document.removeEventListener('click', closeMenuOnClickOutside);
    }
}


//DARK MODE TOGGLE
const eye = $('#eye');
let darkModeEnabled = JSON.parse(localStorage.getItem('darkMode'));

if (darkModeEnabled === true) {
    html.toggleClass('darkMode');
    eye.attr('src', darkModeEnabled ? '/media/images/blink-svgrepo-com.svg' : '/media/images/eye-svgrepo-com.svg');
}

function enableDarkMode() {
    darkModeEnabled = !darkModeEnabled;
    html.css({
        'transition': 'background-color 1s ease, color 1s ease'
    });

    localStorage.setItem('darkMode', darkModeEnabled.toString());
    html.toggleClass('darkMode', darkModeEnabled);
    eye.attr('src', darkModeEnabled ? '/media/images/blink-svgrepo-com.svg' : '/media/images/eye-svgrepo-com.svg');
    console.log(localStorage.getItem('darkMode'));
};

eye.on('click', enableDarkMode);


// ----------------------Search bar------------------
const loupe = $('#loupe');
const loupeMobile = $('.loupeMobile')
const searchBar = $('#searchbar');

loupe.click(function () {
    if (searchBar.is(':hidden')) {
        searchBar.slideDown(300);
        $('#searchbar').focus();
    } else {

        searchBar.slideUp(300);
        $('#searchResults').css("display", "none");
    }
});
loupeMobile.click(function (event) {
    event.stopPropagation();

    if (searchBar.is(":hidden")) {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
        searchBar.slideDown(300);
        searchBar.focus();

        // Add a one-time event listener for clicks outside the search bar
        $(document).on('click', function (e) {
            // Check if the click is outside the search bar
            if (!$(e.target).closest(searchBar).length && !$(e.target).is(searchBar)) {
                searchBar.slideUp(300);
                $('#searchResults').css("display", "none");

                // Remove the event listener after the search bar is closed
                $(document).off('click');
            }
        });
    }
});

// Prevent closing when clicking inside the search bar
searchBar.on('click', function (event) {
    event.stopPropagation();
});


$(document).ready(function () {
    $('#searchbar').keyup(function () {
        let input = $(this).val();
        if (input !== '' && input.length > 2) {
            $('#searchResults').css("display", "flex");
            $.ajax({
                url: "/livesearch",
                method: "post",
                data: {input: input},
                success: function (data) {
                    $('#searchResults').html(data);
                }
            });
        } else {
            $('#searchResults').css("display", "none");
        }
    });
});

// ------------------- DELETE CONFIRM -----------------
deleteButton.on('click', function () {
    const userConfirmed = confirm('Are you sure you want to delete this article?');
    if (!userConfirmed) {
        event.preventDefault();  // Prevent the default action (redirection) if the user cancels
    }
});

// ---------------------------- SIDEBAR -----------------------------
const sideNavButtonMobile = $('#openSideNavMobile');
const chevron = $('#chevron');
const sideBar = $('.sideBar');
let chevronIsOpen = true;
chevron.on('click', function () {
    chevronIsOpen = false;
    sideBar.toggleClass('closed');
    chevron.toggleClass('rotated');
});

sideNavButtonMobile.on("click", function (event) {
    event.stopPropagation();
    sideBar.toggleClass('closed');
    $(document).on('click', closeSidebarOnClickOutside);
});

function closeSidebarOnClickOutside(event) {
    if (!sideBar.is(event.target) && sideBar.has(event.target).length === 0 &&
        !sideNavButtonMobile.is(event.target) && sideNavButtonMobile.has(event.target).length === 0) {
        sideBar.addClass('closed');
        $(document).off('click', closeSidebarOnClickOutside);
    }
}

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



