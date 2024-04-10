const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');
const html = $('html');
const body = $('body');


hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active")
    navMenu.classList.toggle("active")
})


    function myFunction() {
        var element = document.body;
        element.classList.toggle("darkmode");
      }

//LOAD ANIMATION

//DARK MODE TOGGLE 
const eye = $('#eye');
let darkModeEnabled = JSON.parse(localStorage.getItem('darkMode'));
console.log(darkModeEnabled);

if (darkModeEnabled === true) {
    html.toggleClass('darkMode');
    eye.attr('src', darkModeEnabled ? '/media/blink-svgrepo-com.svg' : '/media/eye-svgrepo-com.svg');
}

function enableDarkMode() {
    darkModeEnabled = !darkModeEnabled;
    html.css({
        'transition': 'background-color 1s ease, color 1s ease'
    });
    
    localStorage.setItem('darkMode', darkModeEnabled.toString());
    html.toggleClass('darkMode', darkModeEnabled);
    eye.attr('src', darkModeEnabled ? '/media/blink-svgrepo-com.svg' : '/media/eye-svgrepo-com.svg');
    console.log(localStorage.getItem('darkMode'));
}

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
                url:"/livesearch.php",
                method:"post",
                data:{input:input},
                success:function(data){
                    $('#searchresults').html(data);
                }
            });
        } else {
            $('#searchresults').css("display", "none");
        }
    }).focusout(function() {  
        let input = $(this).val();
        if(input !='' && input.length > 2){
            $('#searchresults').css("display", "flex");
            $.ajax({
                url:"/livesearch.php",
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
