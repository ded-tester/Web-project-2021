@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/5e00931e416c1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Hsee Elevator Cambodia</span></h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Explore</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/teammate.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to Our Team</h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Explore</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/serviceImg.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Service</h2>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Explore</a>
            </div>
          </div>
        </div>
        <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url(assets/img/product-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Product</h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Explore</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6 pt-4 pt-lg-0" style="display: flex;justify-content: center;align-items: center;flex-direction: column;">
              <div class="col-lg-12">
                <center><h2>About us</h2></center>
              </div>
                <p>
                  Company is located in Zhejiang Nanxun economic development zone, the registered capital of $48000000, the project's first phase, owns a modern factory covers an area of about 60000 square meters, and with a 128m high standard elevator testing tower, can be all kinds of vertical elevator, sightseeing elevator, escalator and sidewalks, function test and safety test.
                </p>
              <div class="box">
                  <a href="aboutus.html">More<span style='content: "\20192";'>&#8594;</span></a>
              </div>
          </div>

          <div class="col-lg-6" style="padding: 10px;">        
            <video width="100%" autoplay muted loop controls>
              <source src="assets/img/HSEE-Video.mp4" type="video/mp4">
            </video>
          </div>
         
        </div>
      </div>
    </section><!-- End About Section -->

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
      <div class="container">
         <div class="row portfolio-container">
          
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 portfolio-item filter-app">
              <a href="product.html" class="portfolio-wrap">
                <img src="assets/img/portfolio/product-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>PRODUCT</h4>
                </div>
              </a>
            </div>
          

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/team-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>TEAMS</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/service-team.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SERVICE</h4>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/contact-us.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>CONTACT US</h4>
              </div>
            </div>
          </div>
         </div>
        </div>
      </section><!-- End Portfolio Section --> 
    </main><!-- End #main -->
    
@endsection