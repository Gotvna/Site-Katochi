$(document).ready(function () {
    // $('.carousel').carousel({
    //     fullWidth: true,
    //     indicators: true,
    // });
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.modal').modal();
})

$('.carousel.carousel-slider').carousel({
    indicators: true,

    fullWidth: true,
    padding: 200,

}, setTimeout(autoplay, 5500));

function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 5500);
}



// function changeColorMode() {
//     var elem = document.getElementById('color-mode');
//     elem.classList.toggle('color-mode');
//     console.log('Changed color mode : success')
// }


const theme = document.querySelector('#theme-link');

const theme_btn = document.querySelector('.toggle-theme');

theme_btn.addEventListener('click', function () {
    if (theme.getAttribute("href") == "css/light_mode.css") {
        console.log('Switched to dark mode!');
        theme.href = "css/dark_mode.css";
    } else {
        theme.href = "css/light_mode.css"
    }
});