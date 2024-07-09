const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');
const html = $('html');
const body = $('body');
const deleteButton = $('.deleteButton');

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active")
    navMenu.classList.toggle("active")
});


    function myFunction() {
        var element = document.body;
        element.classList.toggle("darkmode");
      };

//LOAD ANIMATION

//DARK MODE TOGGLE 
const eye = $('#eye');
let darkModeEnabled = JSON.parse(localStorage.getItem('darkMode'));

if (darkModeEnabled === true) {
    html.toggleClass('darkMode');
    eye.attr('src', darkModeEnabled ? '/media/images/blink-svgrepo-com.svg' : '/media/images/eye-svgrepo-com.svg');
};

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


// Search bar
const loupe = $('#loupe');
const searchBar = $('#searchbar');

loupe.click(function() {
    if (searchBar.is(':hidden')) {
        searchBar.slideDown(300);
        $('#searchbar').focus();
    } else {
        searchBar.slideUp(300);
        $('#searchresults').css("display", "none");
    }
});

$(document).ready(function(){
    $('#searchbar').keyup(function(){
        let input = $(this).val();
        if(input !='' && input.length > 2){
            $('#searchresults').css("display", "flex");
            $.ajax({
                url:"/livesearch",
                method:"post",
                data:{input:input},
                success:function(data){
                    $('#searchresults').html(data);
                }
            });
        } else {
            $('#searchresults').css("display", "none");
        }
    });
});

deleteButton.on('click', function(){
    const userConfirmed = confirm('Are you sure you want to delete this article?');
    if (!userConfirmed) {
        event.preventDefault();  // Prevent the default action (redirection) if the user cancels
    }
});

// ---------------------------- SIDEBAR -----------------------------

const chevron = $('#chevron');
const sideBar = $('.sideBar');
let chevronIsOpen = true;
chevron.on('click', function(){
    chevronIsOpen = false;
    sideBar.toggleClass('closed');
    chevron.toggleClass('rotated');
    $('#wrapper').toggleClass('sideBarOpen')
});

const plus = $('#plus');
let limit = 5;

function loadArticles(newLimit) {
    $.ajax({
        url: "/recentArticlesWithLimit/" + newLimit,
        method: "GET",
        success: function(data) {
            if (data) {
                    $('.homePreview').html(data);
            } else {
                console.log('No data :(');
            }
        },
        error: function() {
            console.error("Failed to fetch articles.");
        }
    });
}

$(document).ready(function() {
    loadArticles(limit);
});

plus.on('click', function() {
    limit += 1;
    console.log(limit)
    loadArticles(limit);
});



