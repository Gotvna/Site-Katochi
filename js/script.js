$(document).ready(function(){
    $('.carousel').carousel({
        fullWidth: true,
        indicators: true,
    });
    $('.sidenav').sidenav();
    $('.parallax').parallax();
  });
  
$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    padding: 200
}, setTimeout(autoplay, 5500));
 
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 5500);
}


