var slideIndex = 1;
showSlides(slideIndex);
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("SliderImage");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";
  slideIndex+=1;
  setTimeout(showSlides,2000,slideIndex);
}