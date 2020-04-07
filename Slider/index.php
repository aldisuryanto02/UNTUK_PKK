<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Verdana, sans-serif; margin:0;}
.mySlides {display: none}
img {vertical-align: middle;
width: 100%;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.text1{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  -ms-transform:translate(-50%,-50%);
  font-size: 50px;
}

.text2{
  position:absolute;
  top:60%;
  left:50%;
  transform:translate(-50%,-50%);
  -ms-transform:translate(-50%,-50%);
  font-size: 30px;
}

.mulai{
  position:absolute;
  top:70%;
  left:50%;
  transform:translate(-50%,-50%);
  -ms-transform:translate(-50%,-50%);
  font-size: 10px;
  height: 30px;
  width: 70px;
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


</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="gambar2.jpg" style="height: 680px;, width: 500px;">
  <div class="text1">Sevory</div>
  <div class="text2">Skensa Inventory</div>
  <button class="mulai">Mulai</button>
</div>

<div class="mySlides fade">
  <div class="text1">Sevory</div>
  <div class="text2">Skensa Inventory</div>
  <button class="mulai">Mulai</button>
  <img src="gambar2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="text1">Sevory</div>
  <div class="text2">Skensa Inventory</div>
  <button class="mulai">Mulai</button>
  <img src="gambar1.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

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

</body>
</html> 
