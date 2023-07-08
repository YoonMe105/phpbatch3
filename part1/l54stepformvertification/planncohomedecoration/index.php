<?php

// session_start();

// if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
// 	header("Location:./../singup.php");
// }

require_once "./../sessionconfig.php";

if(authfailed()){
	redirectto('./../singin.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Plannco Home Decoration</title>
	<!-- fav icon -->
	<link href="./assets/img/fav/favicon.png" rel="icon" type="img/png" sizes="16x16" />
	<!-- bootstrap css1 js1 -->
	<link href="./assets/libs/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- jqueryui css1 js1 -->
	<link href="./assets/libs/jquery-ui-1.13.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
	<!-- fontawesome css1 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- lightbox2 css1 js1 -->
	<link href="./assets/libs/lightbox2-2.11.3/dist/css/lightbox.min.css" rel="stylesheet" type="text/css" />
	<!-- custom css -->
	<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>


	<!-- Start Back to Top -->
	<div class="fixed-bottom">
		<a href="#" class="btn-backtotops"><i class="fas fa-arrow-up"></i></a>
	</div>
	<!-- End Back to Top -->



	<!-- Start Header Section -->
	<header>
		
		<!-- Start nav bar -->
			<nav class="navbar navbar-expand-lg fixed-top">
				<a href="index.html" class="navbar-brand text-light mx-3">
					<img src="./assets/img/fav/favicon.png" width="70px" align="favicon" />
					<span class="text-uppercase fw-bold h2 mx-2">Plannco <span class="h3">Home Decoration</span></span>
				</a>

				<button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav">
					<div class="bg-light lines1"></div>
					<div class="bg-light lines2"></div>
					<div class="bg-light lines3"></div>
				</button>

				<div id="nav" class="navbar-collapse collapse justify-content-end text-uppercase fw-bold">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="index.html" class="nav-link mx-2 menuitems">Home</a></li>
						<li class="nav-item"><a href="#about" class="nav-link mx-2 menuitems">About Us</a></li>
						<li class="nav-item"><a href="#properties" class="nav-link mx-2 menuitems">Properties</a></li>
						<li class="nav-item"><a href="#services" class="nav-link mx-2 menuitems">Services</a></li>
						<li class="nav-item"><a href="#customer" class="nav-link mx-2 menuitems">Customer</a></li>
						<li class="nav-item"><a href="#furniture" class="nav-link mx-2 menuitems">Furniture</a></li>
						<li class="nav-item"><a href="#contact" class="nav-link mx-2 menuitems">Contact</a></li>
						<li class="nav-item"><a href="./../logout.php" class="nav-link mx-2 menuitems">Logout</a></li>
					</ul>
				</div>
			</nav>

		<!-- End nav bar -->


		<!-- Start banner -->
			<div class="text-light text-center text-md-end banners">
				<h1 class="display-4 bannerheaders">Welcome to <span class="display-3 text-uppercase">Plannco </span><span class="text-capitalize">home decoration Co.,ltd</span></h1>
				<p class="lead bannerparagraphs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
			</div>
		<!-- End banner -->

	</header>
	<!-- End Header Section -->



	<!-- Start About Us Section -->
	<section id="about" class="py-5 aboutuss">
		
		<div class="container">

			<div class="row">
				<div class="col-sm-6">
					<img src="./assets/img/users/staffgirl1.png" align="staffgirl1" />
				</div>

				<div class="col-sm-6 text-center text-light">
					
					<div class="row">
						
						<div class="col-md-12">
							<h2 class="text-uppercase">Who are we !!!</h2>
							<div class="lines"></div>
							<div class="lines"></div>
							<div class="lines"></div>
						</div>

						<div class="col-md-12">
							<h5 class="fw-italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>

							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

							<a href="#" class="btn btn-danger rounded-0">Read More</a>
						</div>
					</div>

				</div>

			</div>

		</div>
	</section>
	<!-- End About Us Section -->



	<!-- Start Property Section -->
	<section id="properties" class="py-5">
		<div class="container-fluid">

			<!-- start title -->
			<div class="row text-center">
				<div class="col-12">
					<h3 class="titles">Properties</h3>
				</div>
			</div>
			<!-- end title -->

			<ul class="list-inline text-center text-uppercase fw-bold">
				<li class="list-inline-item propertylists activeitems" data-filter="all">All <span class="text-secondary mx-3 mx-md-5">/</span></li>
				<li class="list-inline-item propertylists" data-filter="home">Home <span class="text-secondary mx-3 mx-md-5">/</span></li>
				<li class="list-inline-item propertylists" data-filter="decoration">Decoration<span class="text-secondary mx-3 mx-md-5">/</span></li>
				<li class="list-inline-item propertylists" data-filter="furniture">Furniture <span class="text-secondary mx-3 mx-md-5">/</span></li>
				<li class="list-inline-item propertylists" data-filter="office">Office</li>
			</ul>

			<div class="container-fluid">
				
				<div class="d-flex flex-wrap justify-content-center">

					<div class="filters home"><a href="./assets/img/gallery/image1.jpg" data-lightbox="property" data-title="image1"><img src="./assets/img/gallery/image1.jpg" width="200px" alt="image1" /></a></div>

					<div class="filters home"><a href="./assets/img/gallery/image2.jpg" data-lightbox="property" data-title="image2"><img src="./assets/img/gallery/image2.jpg" width="200px" alt="image2" /></a></div>

					<div class="filters home"><a href="./assets/img/gallery/image3.jpg" data-lightbox="property" data-title="image3"><img src="./assets/img/gallery/image3.jpg" width="200px" alt="image3" /></a></div>

					<div class="filters decoration"><a href="./assets/img/gallery/image4.jpg" data-lightbox="property" data-title="image4"><img src="./assets/img/gallery/image4.jpg" width="200px" alt="image4" /></a></div>

					<div class="filters decoration"><a href="./assets/img/gallery/image5.jpg" data-lightbox="property" data-title="image5"><img src="./assets/img/gallery/image5.jpg" width="200px" alt="image5" /></a></div>

					<div class="filters decoration"><a href="./assets/img/gallery/image6.jpg" data-lightbox="property" data-title="image6"><img src="./assets/img/gallery/image6.jpg" width="200px" alt="image6" /></a></div>

					<div class="filters furniture"><a href="./assets/img/gallery/image7.jpg" data-lightbox="property" data-title="image7"><img src="./assets/img/gallery/image7.jpg" width="200px" alt="image7" /></a></div>

					<div class="filters furniture"><a href="./assets/img/gallery/image8.jpg" data-lightbox="property" data-title="image8"><img src="./assets/img/gallery/image8.jpg" width="200px" alt="image8" /></a></div>

					<div class="filters furniture"><a href="./assets/img/gallery/image9.jpg" data-lightbox="property" data-title="image9"><img src="./assets/img/gallery/image9.jpg" width="200px" alt="image9" /></a></div>

					<div class="filters office"><a href="./assets/img/gallery/image1.jpg" data-lightbox="property" data-title="image10"><img src="./assets/img/gallery/image1.jpg" width="200px" alt="image1" /></a></div>

					<div class="filters office"><a href="./assets/img/gallery/image2.jpg" data-lightbox="property" data-title="image11"><img src="./assets/img/gallery/image2.jpg" width="200px" alt="image2" /></a></div>

					<div class="filters decoration"><a href="./assets/img/gallery/image3.jpg" data-lightbox="property" data-title="image12"><img src="./assets/img/gallery/image3.jpg" width="200px" alt="image3" /></a></div>

					<div class="filters decoration"><a href="./assets/img/gallery/image4.jpg" data-lightbox="property" data-title="image13"><img src="./assets/img/gallery/image4.jpg" width="200px" alt="image4" /></a></div>

					<div class="filters furniture"><a href="./assets/img/gallery/image5.jpg" data-lightbox="property" data-title="image14"><img src="./assets/img/gallery/image5.jpg" width="200px" alt="image5" /></a></div>

					<div class="filters furniture"><a href="./assets/img/gallery/image6.jpg" data-lightbox="property" data-title="image15"><img src="./assets/img/gallery/image6.jpg" width="200px" alt="image6" /></a></div>

					<div class="filters office"><a href="./assets/img/gallery/image7.jpg" data-lightbox="property" data-title="image16"><img src="./assets/img/gallery/image7.jpg" width="200px" alt="image7" /></a></div>

				</div>

			</div>
		
			
		</div>
	</section>
	<!-- End Property Section -->



	<!-- Start Adv Section -->
	<section class="p-5 missions">
		<div class="container">
			<div class="row align-items-center">
				
				<div class="col-lg-5 text-center">
					<img src="./assets/img/etc/building4.png" class="advimages" alt="building" />
				</div>

				<div class="col-lg-7 text-light text-center text-lg-end advtexts">
					<h1>What is Plannco & how we started our business in Myanmar</h1>
					<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>

			</div>
		</div>
	</section>
	<!-- End Adv Section -->



	<!-- Start Services Section -->
	<section id="services" class="py-4 services">
		<div class="container-fluid">

			<!-- start title -->
			<div class="row text-center">
				<div class="col-12">
					<h3 class="titles text-light">Our Services</h3>
					<p class="lead text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				</div>
			</div>
			<!-- end title -->


			<div class="row">
				
				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="./assets/img/gallery/image1.jpg" alt="image1" />
						<h5 class="text-white text-uppercase fw-bold servicetxts">Living Room</h5>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="./assets/img/gallery/image2.jpg" alt="image2" />
						<h5 class="text-white text-uppercase fw-bold servicetxts">Mini Bar</h5>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="./assets/img/gallery/image3.jpg" alt="image3" />
						<h5 class="text-white text-uppercase fw-bold servicetxts">Dining Room</h5>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="./assets/img/gallery/image4.jpg" alt="image4" />
						<h5 class="text-white text-uppercase fw-bold servicetxts">Meeting Room</h5>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="./assets/img/gallery/image5.jpg" alt="image5" />
						<h5 class="text-white text-uppercase fw-bold servicetxts">Bed Room</h5>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card border-0 servicecards">
						<img src="./assets/img/gallery/image6.jpg" alt="image6" />
						<h5 class="text-white text-uppercase fw-bold servicetxts">Pantry Room</h5>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Services Section -->



	<!-- Start Clients Section -->
	<section class="p-3">
		<div class="container-fluid">
			
			<!-- start title -->
			<div class="row text-center">
				<div class="col-12">
					<h3 class="titles">Satified Clients</h3>
					<p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<!-- end title -->

			<div class="row">
				<div class="col-md-12">
					<ul class="clientslists">
						<li><img src="./assets/img/clients/client1.png" alt="client1" /></li>
						<li><img src="./assets/img/clients/client2.png" alt="client3" /></li>
						<li><img src="./assets/img/clients/client3.png" alt="client3" /></li>
						<li><img src="./assets/img/clients/client4.png" alt="client4" /></li>
						<li><img src="./assets/img/clients/client5.png" alt="client5" /></li>
					</ul>
				</div>
			</div>

		</div>
	</section>
	<!-- End Clients Section -->



	<!-- Start Customer Section -->
	<section id="customers" class="py-3 customers">
		<div class="container-fluid">

			<!-- start title -->
			<div class="row text-center">
				<div class="col-12">
					<h3 class="titles text-light">What Customers Say ?</h3>
				</div>
			</div>
			<!-- end title -->

			<div class="row">
				<div class="col-md-6 mx-auto">

					<div id="customercarousels" class="carousel slide" data-bs-ride="carousel">
						
						<ol class="carousel-indicators">
							<li data-bs-target="#customercarousels" data-bs-slide-to="0" class="active"></li>
							<li data-bs-target="#customercarousels" data-bs-slide-to="1"></li>
							<li data-bs-target="#customercarousels" data-bs-slide-to="2"></li>
						</ol>
					
						<div class="carousel-inner">
						
							<!-- start user1 -->
							<div class="carousel-item text-center active">
								<img src="./assets/img/users/user1.jpg" width="150px" class="rounded-circle my-5" alt="user1" />

								<blockquote class="text-white">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</blockquote>

								<h5 class="text-light text-uppercase fw-bold mb-3">Ms.July</h5>

								<ul class="list-inline mb-5">
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								</ul>

							</div>
							<!-- end user1 -->

							<!-- start user2 -->
							<div class="carousel-item text-center">
								<img src="./assets/img/users/user2.jpg" width="150px" class="rounded-circle my-5" alt="user2" />

								<blockquote class="text-white">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</blockquote>

								<h5 class="text-light text-uppercase fw-bold mb-3">Mr.Anton</h5>

								<ul class="list-inline mb-5">
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								</ul>

							</div>
							<!-- end user2 -->

							<!-- start user3 -->
							<div class="carousel-item text-center">
								<img src="./assets/img/users/user3.jpg" width="150px" class="rounded-circle my-5" alt="user3" />

								<blockquote class="text-white">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</blockquote>

								<h5 class="text-light text-uppercase fw-bold mb-3">Ms.Yoon</h5>

								<ul class="list-inline mb-5">
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
								</ul>

							</div>
							<!-- end user3 -->

						</div>

					</div>

				</div>	
			</div>

		</div>
	</section>
	<!-- End Customer Section -->


	<!-- Start Request Quotation -->
	<section>
		<div class="container">
			<div class="qutoes">
				
				<div class="infos">
					<div class="me-5">
						<img src="./assets/img/icon/phoneicon.png" class="phoneicons" width="40px" alt="phoneicon" />
					</div>
					<div class="text-light">
						<h2 class="text-uppercase fw-bold">Request a free quote</h2>
						<p class="lead">Get answers and advice from people you want it from.</p>
					</div>
				</div>

				<div>
					<a href="tel:09760623218" class="btn btn-calls">Call Now <i class="fas fa-phone"></i></a>
				</div>

			</div>
		</div>
	</section>
	<!-- End Request Quotation -->



	<!-- Start Furniture Services Section -->
	<section id="furniture" class="bg-light text-center py-3">
		<div class="container">
			
			<!-- start title -->
			<div class="row text-center">
				<div class="col">
					<h3 class="titles">Furniture Services</h3>
					<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<!-- end title -->

			<div class="row furicons">

				<div class="col-md-4">
					<img src="./assets/img/icon/services1.png" alt="service1" />
					<h4>Fast service</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>

				<div class="col-md-4">
					<img src="./assets/img/icon/services2.png" alt="service2" />
					<h4>Secure payments</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>

				<div class="col-md-4">
					<img src="./assets/img/icon/services3.png" alt="service3" />
					<h4>Expert team</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>

				<div class="col-md-4">
					<img src="./assets/img/icon/services4.png" alt="service4" />
					<h4>Affordable services</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>

				<div class="col-md-4">
					<img src="./assets/img/icon/services5.png" alt="service5" />
					<h4>90 days warranty</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>

				<div class="col-md-4">
					<img src="./assets/img/icon/services6.png" alt="service6" />
					<h4>Award winning</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>

			</div>
		</div>
	</section>
	<!-- End Furniture Services Section -->


	<!-- Start Contact Section -->
	<section id="contact" class="p-5 contacts">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-lg-5">
					
					<h5 class="display-4 text-light mb-3">Get New Letter</h5>

					<form class="" action="" method="">
						
						<div class="form-group py-4">
							<input type="text" name="name" id="name" class="form-control p-3 inputs" placeholder="Enter Your Name" autocomplete="off" />
							<label for="name" class="labels">Name</label>
						</div>

						<div class="form-group py-4">
							<input type="email" name="email" id="email" class="form-control p-3 inputs" placeholder="Enter Your Email" autocomplete="off" />
							<label class="labels" for="email">Email</label>
						</div>

						<div class="my-4">
							<div class="form-check form-switch">
								<input type="checkbox" name="accept" id="accept" class="form-check-input" />
								<label for="accept" class="text-white">I agree to get push notify.</label>
							</div>
						</div>

						<div class="d-grid">
							<button type="submit" class="btn text-uppercase fw-bold rounded-0 submit-btns">Subscribe</button>
						</div>

					</form>

				</div>

			</div>
		</div>
	</section>
	<!-- End Contact Section -->



	<!-- Start Footer Section -->
	<footer class="bg-dark px-5">
		<div class="container-fluid">
			
			<div class="row text-light py-4">
				
				<div class="col-md-3 col-sm-6">
					<h5 class="mb-3"><img src="./assets/img/fav/favicon.png" width="70px" alt="footericon" />About PLANNCO</h5>
					<p class="small">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
				</div>

				<div class="col-md-3 col-sm-6">
					<h5 class="mb-3">Visit Us</h5>
					<ul class="list-unstyled">
						<li><a href="index.html" class="footerlinks">Home</a></li>
						<li><a href="#about" class="footerlinks">About Us</a></li>
						<li><a href="#properties" class="footerlinks">Properties</a></li>
						<li><a href="#services" class="footerlinks">Services</a></li>
						<li><a href="#customers" class="footerlinks">Customers</a></li>
						<li><a href="#furniture" class="footerlinks">Furniture</a></li>
						<li><a href="#contact" class="footerlinks">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-sm-6">
					<h5 class="mb-3">Need Help?</h5>
					<ul class="list-unstyled">
						<li><a href="#" class="footerlinks text-uppercase">Customer Service</a></li>
						<li><a href="#" class="footerlinks text-uppercase">Online Chat</a></li>
						<li><a href="#" class="footerlinks text-uppercase">Support</a></li>
						<li><a href="#" class="footerlinks text-uppercase">info@plannco.com</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-sm-6">
					<h5 class="mb-3">Contact Us</h5>
					<ul class="list-unstyled small">
						<li>l-9/19(A),60 Street, Between Theik Pan Street And, Aung San St,Mandalay.</li>
						<li>Phone: +95 9 4220 42225 / +95 9 4220 42242</li>
					</ul>

				</div>

			</div>


			<div class="text-light border-top pt-4 d-flex justify-content-between">
				<p>&copy; <span id="getyear"></span> Copyright, Inc,All rights reserved</p>
				<ul class="list-unstyled d-flex">
					<li class="ms-3"><a href="#" class="nav-link"><i class="fab fa-twitter"></i></a></li>
					<li class="ms-3"><a href="#" class="nav-link"><i class="fab fa-instagram"></i></a></li>
					<li class="ms-3"><a href="#" class="nav-link"><i class="fab fa-facebook"></i></a></li>
				</ul>
			</div>

		</div>
	</footer>
	<!-- End Footer Section -->






	<!-- bootstrap css1 js1 -->
	<script src="./assets/libs/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<!-- jquery js1 -->
	<script src="https://code.jquery.com/jquery-3.6.0.js" type="text/javascript"></script>
	<!-- jqueryui css1 js1 -->
	<script src="./assets/libs/jquery-ui-1.13.1/jquery-ui.min.js" type="text/javascript"></script>
	<!-- lightbox2 css1 js1 -->
	<script src="./assets/libs/lightbox2-2.11.3/dist/js/lightbox.min.js" type="text/javascript"></script>
	<!-- custom js -->
	<script src="./js/app.js" type="text/javascript"></script>

</body>
</html>

<!-- 23PP -->