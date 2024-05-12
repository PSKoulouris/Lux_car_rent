<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image slider</title>
    <!--<link rel="stylesheet" href="caroussel_project_style.css" />-->
    
 <link href="/css2/caroussel_project_style.css" rel="stylesheet">
<!--<link href="{{asset('css2/caroussel_project_style.css')}}" rel="stylesheet">-->

  </head>
  <body>
    <div class="carousel carousel_fade">
      <div class="carousel_inner">
        <div class="carousel_item carousel_item_active">
          <img
            src="./images/Luxembourg_car_1_169_notxt.jpg"
            alt=""
            class="carousel"
          />
          <div class="carousel_caption">
            <h1>
              Drive with peace of mind<br />
              with our insurance tailored<br />
              for your safety and security
            </h1>
          </div>
        </div>

        <div class="carousel_item">
          <img
            src="./images/Luxembourg_car_2_169_notxt.jpg"
            alt=""
            class="carousel"
          />
          <div class="carousel_caption">
            <h1>
              Count on us for providing you<br />
              with a reliable fleet that’s<br />
              ready when you are
            </h1>
          </div>
        </div>

        <div class="carousel_item">
          <img
            src="./images/Luxembourg_car_3_169_notxt.jpg"
            alt=""
            class="carousel"
          />
          <div class="carousel_caption">
            <h1>
              Experience luxury and comfort<br />
              with our top-of-the-line electric<br />
              and hybrid cars
            </h1>
          </div>
        </div>

        <div class="carousel_item">
          <img
            src="./images/Luxembourg_car_4_169_notxt.jpg"
            alt=""
            class="carousel"
          />
          <div class="carousel_caption">
            <h1>
              Drive towards a greener future<br />
              with our eco-friendly fleet of<br />
              electric and hybrid vehicles
            </h1>
          </div>
        </div>
      </div>
    </div>
    <!--<script src="caroussel_project_style.js"></script> -->
    <script src="{{ asset('js/caroussel_project_style.js') }}"></script>
  </body>
</html>