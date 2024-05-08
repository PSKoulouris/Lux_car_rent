<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <!--image 1-->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="{{ url('images/Luxembourg_car_1_web_fin.jpg')}}" style="width:100%">
    <div class="text">Caption Text</div>
  </div>
<!--image 2-->
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="{{ url('images/Luxembourg_car_2_final_web.jpg')}}"style="width:100%">
    <div class="text">Caption Two</div>
  </div>
<!--image 3-->
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="{{ url('images/Luxembourg_car_3_final_web.jpg')}}" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
<!--image 4-->
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="{{ url('public/images/Luxembourg_car_4_final_web.jpg')}}" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>