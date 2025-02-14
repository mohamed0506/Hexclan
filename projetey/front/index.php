<!doctype html>
<html lang="zxx">

<?php
      include "../Core/produitCore.php";
      include "../Core/photoCore.php";


$produitCoreInstance=new produitCore();
$listProduits = $produitCoreInstance->afficherListProduits();
      


  


?>


    
<!-- Mirrored from templates.envytheme.com/asahi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 19:23:59 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Theme Default CSS --> 
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Owl Carousel CSS --> 
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Flaticon CSS --> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Font Awesome CSS --> 
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Nice Select CSS --> 
		<link rel="stylesheet" href="assets/css/nice-select.css">
        <!-- Imagelightbox CSS --> 
		<link rel="stylesheet" href="assets/css/imagelightbox.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Date Picker CSS -->
        <link rel="stylesheet" href="assets/css/date-picker.css">
        <!-- Date Picker CSS -->
        <link rel="stylesheet" href="assets/css/odometer.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <!-- TITLE -->
        <title>Asahi - Food & Restaurant HTML Template</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

		<!-- Start Navbar Area -->
		<div class="asahi-nav">
			<div class="navbar-area fixed-top">
				<!-- Menu For Mobile Device -->
				<div class="mobile-nav">
					<a href="index.html" class="logo">
						<img src="assets/img/asahi-logo.png" alt="Asahi Logo">
					</a>
				</div>

				<!-- Menu For Desktop Device -->
				<div class="main-nav asahi-nav-style-two asahi-nav-style-three">
					<nav class="navbar navbar-expand-md navbar-light">
						<div class="container">
							<a class="navbar-brand" href="index.html">
								<img src="assets/img/asahi-logo.png" alt="Asahi Logo">
							</a>
	
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle active">Home</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="index.php" class="nav-link active">Home One</a>
											</li>
											<li class="nav-item">
												<a href="index-2.html" class="nav-link">Home Two</a>
											</li>
											<li class="nav-item">
												<a href="index-3.html" class="nav-link">Home Three</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Menu</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="menu-standard.html" class="nav-link">Menu Standard</a>
											</li>
											<li class="nav-item">
												<a href="menu-classic.html" class="nav-link">Menu Classic</a>
											</li>
											<li class="nav-item">
												<a href="menu-grid.php" class="nav-link">Menu Grid</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Pages</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="about.html" class="nav-link active">about</a>
											</li>
											<li class="nav-item">
												<a href="faq.html" class="nav-link">FAQ</a>
											</li>
											<li class="nav-item">
												<a href="coming-soon.html" class="nav-link">Coming Soon</a>
											</li>
											<li class="nav-item">
												<a href="404.html" class="nav-link">404 Error</a>
											</li>
											<li class="nav-item">
												<a href="log-in.html" class="nav-link">Log In</a>
											</li>
											<li class="nav-item">
												<a href="sign-up.html" class="nav-link">Sign Up</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Shop</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="shop.html" class="nav-link">Shop</a>
											</li>
											<li class="nav-item">
												<a href="shop-details.html" class="nav-link">Shop Details</a>
											</li>
											<li class="nav-item">
												<a href="checkout.html" class="nav-link">Checkout</a>
											</li>
											<li class="nav-item">
												<a href="cart.html" class="nav-link">Cart</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Blog</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="blog-grid.html" class="nav-link">Blog Grid</a>
											</li>
											<li class="nav-item">
												<a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="blog-details.html" class="nav-link">Blog Details</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="contact.html" class="nav-link">Contact</a>
									</li>
								</ul>
								<div class="others-option">
									<a href="tel:+800-987-65-43" class="menu-btn contact-number">
										<i class="flaticon-phone-call"></i> 
										+800-987-65-43
									</a>
									<a href="#" data-toggle="modal" data-target="#myModal2" class="menu-btn side-menu">
										Menu
										<i class="flaticon-menu"></i>
									</a>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Navbar Area -->

		<!-- Start Sidebar Modal -->
		<div class="sidebar-modal">  
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<i class="fa fa-times"></i>
								</span>
							</button>
							<h2 class="modal-title" id="myModalLabel2">
								<a href="index.html">
									<img src="assets/img/asahi-logo.png" alt="Logo">
								</a>
							</h2>
						</div>
						<div class="modal-body">
							<div class="sidebar-modal-widget">
								<h3 class="title">Additional Links</h3>
								<ul>
									<li>
										<a href="log-in.html">Log In</a>
									</li>
									<li>
										<a href="sign-up.html">Sign Up</a>
									</li>
									<li>
										<a href="faq.html">FAQ</a>
									</li>
									<li>
										<a href="#">Logout</a>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Contact Info</h3>
								<ul class="contact-info">
									<li>
										<i class="fa fa-map-marker"></i>
										Address
										<span>25 Street, west Cruch, Newzeland</span>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										Email
										<span>giano@gmail.com</span>
									</li>
									<li>
										<i class="fa fa-envelope"></i>
										Phone
										<span>+25462755, 265497466</span>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Connect With Us</h3>
								<ul class="social-list">
									<li>
										<a href="#">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar Modal -->

		<!-- Start Hero Slider Area -->
		<section class="hero-slider-area hero-slider-three">
			<div class="hero-slider owl-carousel owl-theme">
				<div class="hero-slider-item slider-item-bg-4">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="hero-slider-text slider-text-three">
									<span class="lg-text">Welcome to Asahi</span>
									<h1>Restaurant Fresh Dishes For Home <span>Desh lover</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis.</p>	
									<div class="banner-button">
										<a class="default-btn-two" href="book-table.html">
											Book Table
											<i class="flaticon-next"></i>
										</a>
										<div class="video-wrap">
											<div class="video-btn-wrap">
												<a href="play-video.html" class="video-btn"  data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"assets/img/comeing-soon/video.mp4", "type":"video/mp4"}]}' data-imagelightbox="video">
													<i class="flaticon-play-button"></i>
													<div class="video-play">
														<p>Play Video Now</p>
													</div>
												</a>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-slider-item slider-item-bg-5">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="hero-slider-text slider-text-three">
									<span class="lg-text">Welcome to Asahi</span>
									<h1>The best way to celebrate the some <span>delicious food.</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis.</p>	
									<div class="banner-button">
										<a class="default-btn-two" href="book-table.html">
											Book Table
											<i class="flaticon-next"></i>
										</a>
										<div class="video-wrap">
											<div class="video-btn-wrap">
												<a href="play-video.html" class="video-btn"  data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"assets/img/comeing-soon/video.mp4", "type":"video/mp4"}]}' data-imagelightbox="video">
													<i class="flaticon-play-button"></i>
													<div class="video-play">
														<p>Play Video Now</p>
													</div>
												</a>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-slider-item slider-item-bg-6">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="hero-slider-text slider-text-three">
									<span class="lg-text">Welcome to Asahi</span>
									<h1>Good food is to be enjoyed food very <span>beautiful in itse</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis.</p>	
									<div class="banner-button">
										<a class="default-btn-two" href="book-table.html">
											Book Table
											<i class="flaticon-next"></i>
										</a>
										<div class="video-wrap">
											<div class="video-btn-wrap">
												<a href="play-video.html" class="video-btn"  data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"assets/img/comeing-soon/video.mp4", "type":"video/mp4"}]}' data-imagelightbox="video">
													<i class="flaticon-play-button"></i>
													<div class="video-play">
														<p>Play Video Now</p>
													</div>
												</a>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Hero Slider Area -->

		<!-- Start Service Area -->
		<section class="service-area-three ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-service ss-1">
							<div class="service-icon">
								<i class="flaticon-cloche"></i>
							</div>
							<h3>Best Food<span>Quality</span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 icon-color">
						<div class="single-service ss-2">
							<div class="service-icon">
								<i class="flaticon-atmospheric"></i>
							</div>
							<h3>Magical <span>Atmosphere</span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 icon-color">
						<div class="single-service">
							<div class="service-icon">
								<i class="flaticon-money-bag"></i>
							</div>
							<h3>Low Costing <span>Food</span></h3>
							 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Service Area -->

		


		<!-- Start Delicious Menu Area -->
		<section class="delicious-menus-area ptb-100">
			<div class="container">
				<div class="delicious-menu-wrap">
					<div class="section-title">
						<h2>Check Our <span>Delicious Menu</span></h2>
					</div>
					<div class="row">

						<?php foreach($listProduits as $row){ ?>
						<div class="col-lg-4 col-md-6">
							<div class="single-delicious-menu">
								<div class="menu-list-img">
									<img src="http://localhost/projet/<?PHP echo $row['photo']; ?>" alt="Delicious" style="height :110px; width: 110px;">
									<div class="recommend">
										<a href="#">Recommended</a>
									</div>
								</div>
								<div class="delicious-menu-text">
									<h3><?PHP echo $row['nom']; ?></h3>
									<p><?PHP echo $row['description']; ?></p>
									<span class="lg-text"><?PHP echo $row['prix']; ?> TND</span>
								</div>
							</div>
						</div>
						<?php } ?>
						
				</div>
			</div>
		</section>
		<!-- End Delicious Menu Area -->

		

		<!-- Start Counter Area -->
		<div class="conuter-area ptb-100-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-md-3 pr-0">
						<div class="single-conuter conuters">
							<span class="odometer" data-count="93">00</span>
							<p>Beverages</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-3 p-0">
						<div class="single-conuter conuters">
							<span class="odometer" data-count="109">00</span>
							<p>Food items</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-3 p-0">
						<div class="single-conuter conuters">
							<span class="odometer" data-count="75">00</span>
							<p>Cooks</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-3 pl-0">
						<div class="single-conuter">
							<span class="odometer" data-count="163">00</span>
							<p>Original dhishes</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Counter Area -->

		<!-- Start Book Table Area -->
		<section class="book-table-area-three">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 p-0">
						<div class="books-froms-wrap">
							<div class="d-table">
								<div class="d-table-cell">
										<div class="book-from books-froms">
											<h3>Book your Table</h3>
											<form>
												<div class="form-group">
													<div class="select-box">
														<i class="flaticon-avatar"></i>
														<select class="form-control">
															<option value="5">Number of  People</option>
															<option value="1">5</option>
															<option value="2">10</option>
															<option value="0">15</option>
															<option value="3">20</option>
															<option value="4">25</option>
															<option value="5">30</option>
															<option value="6">35</option>
															<option value="7">40</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<div class="select-box">
														<i class="flaticon-timetable"></i>
														<div class="input-group date" id="datetimepicker2">
															<input type="text" class="form-control" placeholder="Date">
															<span class="input-group-addon">
																<i class="glyphicon glyphicon-th"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="select-box">
														<i class="flaticon-clock"></i>
														<select class="form-control">
															<option value="1">Time</option>
															<option value="2">09.00 AM To 10.00 AM</option>
															<option value="0">10.00 AM To 11.00 AM</option>
															<option value="3">11.00 AM To 12.00 PM</option>
															<option value="4">12.00 PM To 01.00 PM</option>
															<option value="5">01.00 PM To 03.00 PM</option>
															<option value="6">04.00 PM To 06.00 PM</option>
															<option value="7">07.00 PM To 10.00 PM</option>
															<option value="8">10.00 PM To 11.00 PM</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<div class="select-box">
														<i class="flaticon-group-meeting"></i>
														<select class="form-control">
															<option value="5">Number of Table</option>
															<option value="1">01</option>
															<option value="1">01</option>
															<option value="1">01</option>
															<option value="1">01</option>
															<option value="1">01</option>
															<option value="1">01</option>
															<option value="1">01</option>
															<option value="1">01</option>
															<option value="1">01</option>
														</select>
													</div>
												</div>
												<button type="submit" class="default-btn">
													FIND A TABLE
												</button>
											</form>
										</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 p-0">
						<div class="contact-info-wrap">
							<div class="d-table">
								<div class="d-table-cell">
									<div class="contact-info">
										<h3>Our contract info</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adip suspendisse ultrices gravida. Risus commodo svel facilisis.</p>
										<ul>
											<li>
												<a href="#">
													<i class="flaticon-phone-call"></i>
													+800-987-65-43
												</a>
											</li>
											<li>
												<a href="#">
													<i class="flaticon-phone-call"></i>
													+800-987-65-43
												</a>
											</li>
										</ul>
										<ul>
											<li>
												<a href="#">
													<i class=" icon-algin fa fa-envelope-o"></i>
													ashsahirestarant@company.com
												</a>
											</li>
											<li>
												<a href="#">
													<i class=" icon-algin fa fa-envelope-o"></i>
													restaurantpersonla@gmail.com
												</a>
											</li>
										</ul>
										<span>
											<i class=" icon-algin fa fa-map-marker"></i>
											85 Bay Meadows Drive Woodstock, GA 30188, United States
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End  Book Table Area -->
	
		<!-- Start Feedback Area -->
        <section class="feedback-area-two ptb-100">
			<div class="container">
				<div class="section-title">
					<h2>People Say <span>About Us!</span></h2>
					<img src="assets/img/shape/1.png" alt="Shape">
				</div>
				<div class="row">
					<div class="feedback-wrap owl-carousel owl-theme">
						<div class="feedback-item-two">
							<img src="assets/img/home-two/feedback/1.jpg" alt="Feedback">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisist amet, consectetur adipiscing elit, sed do eiusm.</p>
							<h3>Wanino doms</h3>
							<span>Co-founder</span>
						</div>
						<div class="feedback-item-two">
							<img src="assets/img/home-two/feedback/2.jpg" alt="Feedback">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisist amet, consectetur adipiscing elit, sed do eiusm.</p>
							<h3>Janadhon doe</h3>
							<span>Co-founder</span>
						</div>
						<div class="feedback-item-two">
							<img src="assets/img/home-two/feedback/3.jpg" alt="Feedback">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisist amet, consectetur adipiscing elit, sed do eiusm.</p>
							<h3>Anadson steve</h3>
							<span>Co-founder</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Feedback Area -->

		<!-- Start Blog Area -->
		<section class="blog-area ptb-100-70">
			<div class="container">
				<div class="section-title">
					<h2>From <span>Our Blog</span></h2>
					<img src="assets/img/shape/1.png" alt="Shape">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="blog-details.html">
								<img src="assets/img/blog/1.jpg" alt="Blog">
							</a>	
							<div class="blog-text">
								<p>By <a href="#">Admin</a>  / On March 28, 2019</p>
								<h3>
									<a href="blog-details.html">A new restaurant in town that Looking think that Do care for new</a>
								</h3>
								<a class="read-more" href="blog-details.html">Read More <i class="flaticon-right-arrow-forward"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="blog-details.html">
								<img src="assets/img/blog/2.jpg" alt="Blog">
							</a>	
							<div class="blog-text">
								<p>By <a href="#">Admin</a>  / On April 28, 2019</p>
								<h3>
									<a href="blog-details.html">Starbucks invests $100M in new retail startups Get a great test of foods</a>
								</h3>
								<a class="read-more" href="blog-details.html">Read More <i class="flaticon-right-arrow-forward"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-blog">
							<a href="blog-details.html">
								<img src="assets/img/blog/3.jpg" alt="Blog">
							</a>	
							<div class="blog-text">
								<p>By <a href="#">Admin</a>  / On May 28, 2019</p>
								<h3>
									<a href="blog-details.html">Labor Depar rules pro as tweaks overtime Feel to get into this</a>
								</h3>
								<a class="read-more" href="blog-details.html">Read More <i class="flaticon-right-arrow-forward"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start Footer Area -->
		<footer class="footer-area ptb-100-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-widget">
							<a href="#">
								<img src="assets/img/asahi-footer-logo.png" alt="Footer Logo">
							</a>
							<p>Sign up to our newsletter to get the latest food item news.</p>
							<form class="subscribe">
								<label>
									<input type="search" class="search-field" placeholder="Email address">
								</label>
								<input type="submit" class="search-submit default-btn-2" value="Sbuscribe">
							</form>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="single-widget single-widget-1">
							<h3>USEFUL LINKS</h3>
							<ul class="footer-menu">
								<li>
									<a href="hone-one.html">
										<i class="flaticon-right-arrow-forward"></i> 
										Home
									</a>
								</li>
								<li>
									<a href="#">
										<i class="flaticon-right-arrow-forward"></i>
										About Us
									</a>
								</li>
								<li>
									<a href="#">
										<i class="flaticon-right-arrow-forward"></i>
										Blog Grid
									</a>
								</li>
								<li>
									<a href="contact.html">
										<i class="flaticon-right-arrow-forward"></i>
										Contact Us
									</a>
								</li>
								<li>
									<a href="#">
										<i class="flaticon-right-arrow-forward"></i>
										Privacy Policy
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-widget single-widget-2">
							<h3>ADDRESS</h3>
							<ul>
								<li class="address-s">
									44 Canal Center Plaza #200, Alexandria, VA 22314, USA
								</li>
								<li><a href="#">Hotline: 1900 – 123 456 78</a></li>
								<li><a href="#">Email: asahi@gmail.com</a></li>
								<li><a href="#">Email: info@example.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-widget">
							<h3>OPENING HOURS</h3>
							<ul>
								<li class="footer-border">
									Monday: <span>9.00 AM - 22.00 PM</span>
								</li>
								<li class="footer-border">
									Tuesday: <span>9.00 PM - 22.00 AM</span>
								</li>
								<li class="footer-border">
									Wednesday: <span>9.00 AM - 20.00 PM</span>
								</li>
								<li>
									Thursday: <span>8.00 AM - 22.00 PM</span>
								</li>
								<li>
									Friday: <span>9.00 AM - 22.00 PM</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Footer Bottom Area -->
		<footer class="footer-bottom footer-three-bottom-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-3">
						<ul class="social-list">
							<li>
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-youtube-play"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="copy-right">
							<p>
								© 2019 All Rights Reserved-<a href="https://envytheme.com/">EnvyTheme</a>
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-3">
						<ul class="bank-card">
							<li>
								<a href="#">
									<img src="assets/img/payment/1.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/img/payment/2.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/img/payment/3.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/img/payment/4.png" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Bottom Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top-area">
			<div class="go-top-wrap">
				<div class="go-top-btn-wrap">
					<div class="go-top go-top-btn">
						<i class="flaticon-arrows"></i>
						<i class="flaticon-arrows"></i>
					</div>
				</div>
			</div>
		</div>
		<!-- End Go Top Area -->

        
        <!-- Jquery Slim JS -->
        <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
		<script src="assets/js/jquery.meanmenu.js"></script>
		<!-- Nice Select JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.js"></script>
        <!-- Bootstrap Datepicker JS -->
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
        <!-- Imagelightbox JS -->
		<script src="assets/js/imagelightbox.min.js"></script>
        <!-- Appear JS -->
		<script src="assets/js/jquery.appear.js"></script>
        <!-- Odometer JS -->
		<script src="assets/js/odometer.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/asahi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 19:24:15 GMT -->
</html>