const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');
const html = $('html');


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
let darkModeEnabled = localStorage.getItem('darkMode') === 'true';

function enableDarkMode() {
    darkModeEnabled = !darkModeEnabled;
    localStorage.setItem('darkMode', darkModeEnabled.toString());
    const html = $('html');
    html.css({
        'transition': 'background-color 0.5s ease, color 0.5s ease'
      });
      
    html.toggleClass('darkMode', darkModeEnabled);
    eye.attr('src', darkModeEnabled ? '/media/blink-svgrepo-com.svg' : '/media/eye-svgrepo-com.svg');
}

eye.on('click', enableDarkMode);
html.toggleClass('darkMode', darkModeEnabled);

