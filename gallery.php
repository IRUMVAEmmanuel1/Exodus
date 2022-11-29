<?php
include 'dashboard/db/connection.php';
    $query = $connect->query("SELECT * FROM gallery ORDER BY id DESC LIMIT 20");
?>



<?php
// Include the database configuration file

// include './layout/header.php';
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exodus</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->

	<style>.single-gallery-image {
  margin-top: 30px;
  background-repeat: no-repeat !important;
  background-position: center center !important;
  background-size: cover !important;
  height: 200px;
}
.single-gallery-image{
	margin-top:30px;
	background-repeat:no-repeat !important;
	background-position:center center !important;
	background-size:cover !important;
	height:200px}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-primary ftco-navbar-primary" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand " href="index.php">Exodus<span class="text-secondary">Travel Agency</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item" ><a href="#about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="#destination" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Gallery</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					
				</ul>
				<a href="signup_page.php"><button style="border-radius: 10px; background-color: #007bff; height: 40px; width: 100px; color:white">register</button></a> 
			</div>
		</div>
	</nav>



	<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img style="width:130px;" src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>


	
	<!-- End Sample Area -->

	<!-- Start Button -->
	
	<!-- End Button -->


			<div class="section-top-border pt-4" style="margin: 15px; ">
				<h3 style="color: red;">Image Gallery</h3>
				<div class="row gallery-item">

				<?php
				while($row = $query->fetch_assoc()){
					$imageURL = 'dashboard/img/gallery/'.$row["image"];
					if($query->num_rows > 0){
					?>
					
					<div class="col-md-4" style="padding-bottom:20px;">
						<a href="<?php echo $imageURL; ?>" class="img-pop-up">
							<div class="single-gallery-image"><img style="width:100%; height:130%; padding-bottom:30px;" src="<?php echo $imageURL; ?>" alt="" <?php echo $row["title"] ?>>
							
						</a><h6 class="text-white" style="padding-left:20px;"><a href="#"><?php echo $row["title"] ?></a></h6></div>
					</div>
					<?php 
}
}
?> 
					
				</div>
			</div>
			
	<!-- End Align Area -->

	

<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
		<script src="./assets/js/slick.min.js"></script>
		
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		<script src="./assets/js/jquery.magnific-popup.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
</body>
</html>


<script>


var popUp = $('.single_gallery_part, .img-pop-up');
      if(popUp.length){
        popUp.magnificPopup({
          type: 'image',
          gallery:{
            enabled:true
          }
        });
      }
</script>