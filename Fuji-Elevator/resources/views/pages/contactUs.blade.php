@extends('layouts.app')
@section('content')
     <!--Main Image-->
   <section class="mainImage">
    <img src="assets/img/backgroud/contactus.png" alt="aboutusimg">
  </section>
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Contact us</h2>
            <ol>
                <li><a href="home.html">Home</a></li>
                <li>Contact us</li>
            </ol>
        </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <section class="ftco-section">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact Form #03</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<!-- <div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div> -->
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6">
                <!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe width="550" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Phnom%20Penh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br>
                    <a href="https://www.embedgooglemap.net"></a>                  
                  </div>
                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection