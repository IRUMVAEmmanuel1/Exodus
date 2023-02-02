<?php
// Include the database configuration file
include 'dashboard/db/connection.php';
// include './layout/header.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Exodus Tour and Travery Agency</title>
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
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Exodus<span>Travel Agency</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="index.php#destination.php" class="nav-link">Destination</a></li>
          <li class="nav-item active"><a href="#" class="nav-link">Hotel</a></li>
          <li class="nav-item"><a href="index.php#blog" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="index.php#service" class="nav-link">Service</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 " style="background-image: url('images/bg_1.jpg'); height: 400px;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text  align-items-end justify-content-center" style="padding-top:200px;">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Hotel <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Hotels</h1>
        </div>
      </div>
    </div>
  </section>



  <section class="ftco-section">
    <div class="container">
      <div class="row">

        <?php
        $query = $connect->query("SELECT * FROM hotels ORDER BY id DESC LIMIT 9");

        if ($query->num_rows > 0) {
          while ($row = $query->fetch_assoc()) {
            $imageURL = 'dashboard/img/hotelImages/' . $row["file_name"];

        ?>
            <div class="col-md-4 ftco-animate">
              <div class="project-wrap hotel">

                <?php
                if (!isset($_SESSION['email'])) {


                ?>
                  <a href="script.php?id=<?= $row["id"]; ?>  " class="img" style="background-image: url('<?php echo $imageURL; ?>')">
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
                  <p class="star mb-2">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <span class="days"><?php echo $row["duration"] ?></span>
                  <h3><a href="#"><?php echo $row["hotelName"] ?></a></h3>
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
      <!-- <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div> -->
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