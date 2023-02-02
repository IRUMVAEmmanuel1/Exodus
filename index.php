<?php
// Include the database configuration file
include 'dashboard/db/connection.php';
// include './layout/header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Exodus</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./services//index.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<style>
	html {
		scroll-behavior: smooth;
		padding-top: 10px;
	}
</style>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Exodus<span>Tours and Travel Agency</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="#destination" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
					<li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="#service" class="nav-link">Service</a></li>
					<li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

				</ul>
				<a href="signup_page.php"><button style="border-radius: 10px; background-color: #007bff; height: 40px; width: 140px; color:white;font:bold">Login/register</button></a>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap js-fullheight" style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('images/isra.jpg')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<span class="subheading">Welcome to Exodus</span>
					<h1 class="mb-4">Discover Your <span style="color: #007bff;">Favorite</span> Place with Us</h1>
					<p class="caps">Travel to the any corner of the world, without going around in circles</p>
				</div>
				<a href="https://www.youtube.com/watch?v=s3LZ1xXYTlI" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="fa fa-play"></span>
				</a>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ftco-search d-flex justify-content-center">
						<div class="row">
							<div class="col-md-12 nav-link-wrap">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Search Tour</a>

									<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>

								</div>
							</div>
							<div class="col-md-12 tab-wrap">

								<div class="tab-content" id="v-pills-tabContent">

									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="#" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-md d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">Destination</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Search place">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Check-in date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkin_date" placeholder="Check In Date">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Check-out date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Price Limit</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">$100</option>
																	<option value="">$10,000</option>
																	<option value="">$50,000</option>
																	<option value="">$100,000</option>
																	<option value="">$200,000</option>
																	<option value="">$300,000</option>
																	<option value="">$400,000</option>
																	<option value="">$500,000</option>
																	<option value="">$600,000</option>
																	<option value="">$700,000</option>
																	<option value="">$800,000</option>
																	<option value="">$900,000</option>
																	<option value="">$1,000,000</option>
																	<option value="">$2,000,000</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>

									<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
										<form action="#" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-lg d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">Destination</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Search place">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-in date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkin_date" placeholder="Check In Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-out date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Price Limit</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">$100</option>
																	<option value="">$10,000</option>
																	<option value="">$50,000</option>
																	<option value="">$100,000</option>
																	<option value="">$200,000</option>
																	<option value="">$300,000</option>
																	<option value="">$400,000</option>
																	<option value="">$500,000</option>
																	<option value="">$600,000</option>
																	<option value="">$700,000</option>
																	<option value="">$800,000</option>
																	<option value="">$900,000</option>
																	<option value="">$1,000,000</option>
																	<option value="">$2,000,000</option>
																</select>
															</div>
														</div>
													</div>
												</div>

												<div class="col-lg d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<a href="destination.php"><input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary p-0">
															</a>
														</div>
													</div>
												</div>

											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<section class="ftco-section services-section " id="about">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
					<div class="w-100">
						<span class="subheading">Welcome to Exodus Tour and Travel Agency</span>
						<h2 class="mb-4">It's time to start your adventure</h2>
						<p>Exodus Tour and Travel Agency leads you to a countries which offers a unique combination of history, culture, and natural beauty. The main attractions that draw visitors to Israel include the ancient city of Jerusalem, considered one of the holiest places in the world for Jews, Christians, and Muslims, where visitors can see the Western Wall, the Dome of the Rock, and the Church of the Holy Sepulchre. The Dead Sea, the lowest point on Earth, is known for its mineral-rich waters and therapeutic properties. The ancient fortress of Masada offers a breathtaking view of the surrounding desert. Tel Aviv, Israel's second-largest city, is known for its beaches, nightlife, and vibrant cultural scene. The southernmost city, Eilat on the red sea, is a popular destination for diving, snorkeling, and other water sports. The Baha'i Gardens in Haifa is a beautiful terraced garden and the most visited tourist site in Israel. The Galilee, the northern region of Israel, offers beautiful landscapes, historical sites, and biblical significance.</p>
						<p><a href="#" class="bold lg">Best Tour and Travel in Rwanda</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-1 d-block img" style="background-image: url(images/jeru12.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Activities</h3>
									<p>Activities refer to things to do or participate in while on a trip. These can vary widely depending on the destination. </p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-2 d-block img" style="background-image: url(images/jeru17.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Travel Arrangements</h3>
									<p>We plan and organize a trip, including booking transportation, lodging, and activities. </p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-3 d-block img" style="background-image: url(images/jeru19.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Private Guide</h3>
									<p>A private guide refer to a person who provides personalized and specialized tours or assistance to individuals or small groups.</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-4 d-block img" style="background-image: url(images/jeru6.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Location Manager</h3>
									<p> We work closely with tour managers, promoters and event planners to ensure that the chosen locations meet the needs of the tour or event, including factors such as capacity, accessibility, and amenities. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="ftco-section bg-gray" id="destination">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Destination</span>
					<h2 class="mb-4">Select Your Tour Destination </h2>
				</div>
			</div>
			<div class="col-md d-flex">

			</div>
			<div class="row">

				<?php
				$query = $connect->query("SELECT * FROM destination ORDER BY id DESC LIMIT 6");

				if ($query->num_rows > 0) {
					while ($row = $query->fetch_assoc()) {
						$imageURL = 'dashboard/img/dest/' . $row["file_name"];

				?>
						<div class="col-md-4 ftco-animate">
							<div class="project-wrap">


								< <?php
									if (!isset($_SESSION['email'])) {


									?> <a href="script.php?id=<?= $row["id"]; ?>  " class="img" style="background-image: url('<?php echo $imageURL; ?>')">
									<span class="price">$ <?php echo $row["price"] ?>/person</span></a>

								<?php
									} else {
								?>

									<a href="BookingForm.php?id=<?= $row["id"]; ?>  " class="img" style="background-image: url('<?php echo $imageURL; ?>');">


										<span class="price">$ <?php echo $row["price"] ?>/person</span>
									</a>
								<?php
									}
								?>
								<div class="text p-4">
									<span class="days"><?php echo $row["time"] ?></span>
									<h3><a href="#"><?php echo $row["title"] ?></a></h3>
									<p class="location"><span class="fa fa-map-marker"></span> <?php echo $row["location"] ?></p>
									<ul>
										<li><span class="flaticon-shower"></span>2</li>
										<li><span class="flaticon-king-size"></span>3</li>
										<li><span class="flaticon-mountains"></span><?php echo $row["near"] ?></li>
									</ul>
								</div>
							</div>
						</div>


				<?php }
				}
				?>


			</div>

			<a href="destination.php">
				<div style="padding-left:900px;"><button class="btn btn-primary ">View more Tour</button></div>
			</a>
		</div>
	</section>

	<section class="ftco-section ftco-about img" style="background-image: url(images/bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container py-md-5">
			<div class="row py-md-5">
				<div class="col-md d-flex align-items-center justify-content-center">
					<a href="https://www.youtube.com/watch?v=s3LZ1xXYTlI" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
						<span class="fa fa-play"></span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-about ftco-no-pt img">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 about-intro">
					<div class="row">
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/Volcanoes-National-Park-Rwanda.jpg);">
							</div>
						</div>
						<div class="col-md-6 pl-md-5 py-5">
							<div class="row justify-content-start pb-3">
								<div class="col-md-12 heading-section ftco-animate">
									<span class="subheading">About Us</span>
									<h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p><a href="./dashboard/destination/destination.php" class="btn btn-primary">Book Your Destination</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);" id="testimony-section">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimonial</span>
					<h2 class="mb-4">Tourist Feedback</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<?php
						$query = $connect->query("SELECT * FROM feedback ORDER BY id DESC LIMIT 15");

						if ($query->num_rows > 0) {
							while ($row = $query->fetch_assoc()) {
								$imageURL = 'endUserDashboard/profiles/' . $row["profile"];

						?>
								<div class="item">
									<div class="testimony-wrap py-4">
										<div class="text">
											<p class="star">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star text-warning"></span>
											</p>
											<p class="mb-4"><?php echo $row["comment"] ?> </p>
											<div class="d-flex align-items-center">
												<div class="user-img" style="background-image: url('<?php echo $imageURL ?>')"></div>
												<div class="pl-3">
													<p class="name text-primary"><?php echo $row["name"] ?> </p>
													<span class="position text-black-50"><?php echo $row["date"] ?> </span>
												</div>
											</div>
										</div>
									</div>
								</div>

						<?php
							}
						} ?>



					</div>
				</div>
			</div>

			<div class="float-right heading-section-white"><button class="btn btn-primary text-white">Read More</button></div>
		</div>
	</section>


	<section class="ftco-section" id="blog">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Our Blog</span>
					<h2 class="mb-4">Recent Post</h2>
				</div>
			</div>
			<div class="row d-flex">


				<?php
				$query = $connect->query("SELECT * FROM blog ORDER BY id DESC LIMIT 6");

				if ($query->num_rows > 0) {
					while ($row = $query->fetch_assoc()) {
						$imageURL = 'dashboard/img/blog/' . $row["file_name"];

				?>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="blog-entry justify-content-end">
								<a href="blog-single.php?id=<?= $row["id"]; ?>" class="block-20" style="background-image: url('<?php echo $imageURL ?>');">
								</a>
								<div class="text">
									<div class="d-flex align-items-center mb-4 topp">

										<div class="one">
											<span class="yr"><?php echo $row["date"] ?> </span>

										</div>
									</div>
									<h3 class="heading"><a href="#"><?php echo $row["title"] ?> </a></h3>
									<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
									<p><a href="#" class="btn btn-primary">Read more</a></p>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>


			</div>
		</div>
	</section>

	<section id="service" class="bg-primary pb-2 pt-2">
		<div class='container-fluid mx-auto mt-1 mb-5 col-sm-12 heading-section text-center ftco-animate' style="text-align: center">
			<span class="subheading">Our Services</span>
			<div class="hd bold text-white ">Our Services</div>
			<p><small class="text-white">Always render more and better service than is expected of you, no matter what your ask may be.</small></p>
			<div class="row" style="justify-content: center">

				<?php
				$query = $connect->query("SELECT * FROM services ORDER BY id DESC LIMIT 6");

				if ($query->num_rows > 0) {
					while ($row = $query->fetch_assoc()) {
						$imageURL = 'dashboard/img/services/' . $row["file_name"];

				?>
						<div class="card col-md-3 col-sm-3 ml-3">
							<div class="card-content">
								<div class="card-body"> <img class="img rounded" src="<?php echo $imageURL ?>" width="250px" />
									<div class="shadow"></div>
									<div class="card-title"> <?php echo $row["title"] ?> </div>
									<div class="card-subtitle">
										<p> <small class="text-muted"><?php echo $row["description"] ?></small> </p>
									</div>
									<div><a href="#about"><button class="btn btn-primary">View more</button></a></div>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>
			</div>

		</div>
	</section>



	<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md pt-5">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">About</h2>
						<p>Exodus Tour and Travel Agency is the premier choice for travelers looking to explore the beauty and diversity of Africa. With a team of experienced and knowledgeable travel experts, Exodus provides customized and high-quality tour packages that cater to the unique interests and needs of each customer. From safari trips to cultural tours, Exodus offers a wide range of options for travelers to choose from.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
							<li class="ftco-animate"><a href="https://twitter.com/home" target="
                        _blank"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="https://www.facebook.com/exodus.tour.7" target="
                        _blank"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/toursexodus/" target="
                        _blank"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Our Services</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Groups Tour to Israel and Egypt</a></a></li>
							<li><a href="#" class="py-2 d-block">Visa Processing, Cheap Flight Tickets</a></li>
							<li><a href="#" class="py-2 d-block">Hotel Booking & Reservation</a></li>
							<li><a href="#" class="py-2 d-block">Group Tours & Vacation Packages</a></li>
							<li><a href="#" class="py-2 d-block">DHL Services</a></li>
							<li><a href="#" class="py-2 d-block">School and Work in Canada & USA</a></li>
							<li><a href="#" class="py-2 d-block">Insurance Services</a></a></li>
							<li><a href="#" class="py-2 d-block">Local Tour</a></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">Experience</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Adventure</a></li>
							<li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
							<li><a href="#" class="py-2 d-block">Beach</a></li>
							<li><a href="#" class="py-2 d-block">Nature</a></li>
							<li><a href="#" class="py-2 d-block">Camping</a></li>
							<li><a href="#" class="py-2 d-block">Party</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">Have a Questions? Find us Here</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map-marker"></span><span class="text">Kigali Kicukiro - Remera, Rwanda</span></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+250788608558</span></a></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+250788726181</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">exodustta@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | Exodus Tour and Travel Agency
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>


</body>

</html>

<script>
	window.firstPageId = 'c1dmp'
	window.bi.sendBeat(12, 'Partially visible', {
		pageId: window.firstPageId
	})
	if (window.requestCloseWelcomeScreen) {
		window.requestCloseWelcomeScreen()
	}
	if (!window.__browser_deprecation__) {
		window.fedops.phaseStarted('partially_visible', {
			paramsOverrides: {
				pageId: firstPageId
			}
		})
	}
</script>