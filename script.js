var slides = document.querySelectorAll('#slides .mySlydes');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,2000);


function nextSlide() {

slides[currentSlide].className = "slides";
currentSlide = (currentSlide + 1)%slides.length;
slides[currentSlide].className = 'first';

}