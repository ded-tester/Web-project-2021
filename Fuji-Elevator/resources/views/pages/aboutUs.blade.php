@extends('layouts.app')

@section('content')
 <!--Main Image-->
 <section class="aboutUsMainImage">
      <img src="assets/img/backgroud/aboutus.png" alt="aboutusimg">
  </section>
  <section id="breadcrumbsForAboutUS" class="breadcrumbsForAboutUS">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>About Us</h2>
            <ol>
                <li><a href="home.html">Home</a></li>
                <li>About Us</li>
            </ol>
        </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <div class="aboutUSchoice">
    <div class="row">
        <div class="col-6 ">
            <a href="#aboutUSabout" >Company Details</a>
        </div>
        <div class="col-6">
            <a href="#certificate">Certificate</a>
            
        </div>
    </div>
  </div>
    <!-- ======= About Section ======= -->
    <div id="aboutUSabout" class="aboutUSabout">
      <div class="container">
       
        <h3 style="color: #0094dc; display: flex;justify-content:flex-start;">Company Details</h3>
        <hr>
          <div class="row">
            <div class="col-lg-2">
                <div class="president_frame">
                    <img src="assets/img/president.png" alt="" onclick="showImage('assets/img/president.png')">
                  
                      <p><strong>Mr.</strong> PHENG BUNDA <br>
                      <strong>PRESIDENT, FJ Elevator, Cambodia</strong></p>
                    
                </div>
            </div>
            <div class="col-lg-10">
              Company is located in Zhejiang Nanxun economic development zone, the registered capital of $48000000, the project's first phase, owns a modern factory covers an area of about 60000 square meters, and with a 128m high standard elevator testing tower, can be all kinds of vertical elevator, sightseeing elevator, escalator and sidewalks, function test and safety test.

              Inside the elevator in the factory production base and research and development center, equipped with the most modern production equipment, research and development ability, training center and customer service center. FUJIHSEE elevator mature application of synchronization with the world advanced technolgy, the introduction of industry in the first-class production technology, continuously introduce products that meet the market demand and development of human society requires, covering passenger elevator, villa elevator, panoramic elevator, cargo elevator, car elevator, escalators, automatic sidewalks, hydraulic elevator and so on ten big series, more than 40 varieties. Products in addition to meet the market demand in China, also exported to Australia, the United States, Russia, Japan, Germany, Mexico, Brazil, Ukraine in over 20 countries and regions, such as for the customer the consistent high praise.

              Ride the dream focusing on Huaxia. FUJIHSEE elevator will with German technology, high quality, continuos innovative and perfect service, strive to become your side of the elevator manufacturing experts.
            </div>
        </div>
      </div>
    </div><!-- End About Section -->
    <div id="imageClass" class="imageClass">
        <div class="container">
            <div class="row" id="company-row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <img src="assets/img/HSEE_FACTORY1.JPG" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <img src="assets/img/HSEE_FACTORY3.JPG" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <img src="assets/img/HSEE_FACTORY2.JPG" alt="">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <img src="assets/img/staff.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <img src="assets/img/staff1.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                  
                </div>
            </div>
        </div>
    </div>
    <div id="certificate"class="certificate">
        <div class="container">
         
            <h3 style="color: #0094dc; display: flex;justify-content:flex-start;">Certificate</h3>
            <hr>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" id="img">
                 
                    <div class="certificate-name">
                      <a href="ElevatorProductionandInstallationLicense.html">Elevator Production and Installation License</a>
                    </div>
                    <img src="assets/img/Certificate/cerficate1.JPG" alt="" onclick="showImage('assets/img/Certificate/cerficate1.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">CE Certificate (A)</a>
                  </div>
                  <img src="assets/img/Certificate/certificate2a.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate2.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">CE Certificate (B)</a>
                  </div>
                  <img src="assets/img/Certificate/certificate2b.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate2.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">ISO14001 Environmental Certificate</a>
                  </div>
                  <img src="assets/img/Certificate/certificate3.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate3.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">ISO9001 Quality Certificate</a>
                  </div>
                  <img src="assets/img/Certificate/certificate4.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate4.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">OHSAS Occupational Health Certificate</a>
                  </div>
                  <img src="assets/img/Certificate/certificate5.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate5.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">TUV Certificate</a>
                  </div>
                  <img src="assets/img/Certificate/certificate6.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate6.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">EAC Certificate</a>
                  </div>
                  <img src="assets/img/Certificate/certificate7.png" alt="" onclick="showImage('assets/img/Certificate/certificate7.png')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">EAC Certificate</a>
                  </div>
                  <img src="assets/img/Certificate/certificate8.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate8.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">Energy Saving and Environmental Protection Certificate</a>
                  </div>
                  <img src="assets/img/Certificate/certificate9.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate9.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">Sustainable Development Enterprise Certificate</a>
                  </div>
                  <img src="assets/img/Certificate/certificate10.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate10.JPG')">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                  <div class="certificate-name">
                    <a href="">ZHEJIANG Manufacture</a>
                  </div>
                  <img src="assets/img/Certificate/certificate11.JPG" alt="" onclick="showImage('assets/img/Certificate/certificate11.JPG')">
                </div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay" onclick="off()">
      <img src="" alt="" id="overlayImage">
    </div>
@endsection