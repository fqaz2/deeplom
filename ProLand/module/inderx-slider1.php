<style>
* {box-sizing: border-box}
.mySlides {display: none}
img {
  vertical-align: middle;
  max-height: 450px;
  object-fit: cover;
}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.slideshow-container .text {
  color: #f2f2f2;
  padding: 8px 50px;
  position: absolute;
  width: 100%;

  top: 50%;
  transform: translate(0,-50%);
  font-size: 2.25rem;
}
.slideshow-container .text .text1{
  transition: 0.5s;
  margin: auto;
  max-width: 900px;
}

@media (max-width: 575px){
.slideshow-container  .text .text1{
      transition: 0.5s;
      font-size: 1.5rem;
  }
}
@media (max-width: 625px){
.slideshow-container  .text .text1{
      transition: 0.5s;
      font-size: 1.7rem;
  }
}
@media (max-width: 700px){
.slideshow-container  .text .text1{
      transition: 0.5s;
      font-size: 1.85rem;
  }
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.slideshow-container  a.knopka {
    font-size: 20px;
    display: inline-block;
    color: black;
    text-decoration: none; /* убирать подчёркивание у ссылок */
    user-select: none; /* убирать выделение текста */
    background: #fff; /* фон кнопки */
    padding: 10px; /* отступ от текста */
    outline: none; /* убирать контур в Mozilla */
  } 
.slideshow-container  a.knopka:hover {     
    color: #fff;
    background-color: #090;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 2</div>
  <img src="\img\index-slider1\1.png" style="width:100%">
  <div class="text">
    <div class="text1">
      Общестроительные работы <br>
      <a href="#" class="knopka">Перечень работ</a>
    </div>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 2</div>
  <img src="\img\index-slider1\2.png" style="width:100%">
  <div class="text">
    <div class="text1">
      Благоустройство <br>
      <a href="#" class="knopka">Перечень работ</a>
    </div>
  </div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div style="margin-top: -30px;position: absolute;left: 50%; transform: translate(-50%,0);">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span>  
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>