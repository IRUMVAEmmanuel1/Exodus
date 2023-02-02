<?php
include 'dashboard/db/connection.php';
$query = $connect->query("SELECT * FROM gallery ORDER BY id DESC LIMIT 20");
?>



<?php
// Include the database configuration file

// include './layout/header.php';
?>

<style>
  .hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
  }

  .hovereffect .overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
  }

  .hovereffect img {
    display: block;
    position: relative;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
  }

  .hovereffect:hover img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.7" /><feFuncG type="linear" slope="0.7" /><feFuncB type="linear" slope="0.7" /></feComponentTransfer></filter></svg>#filter');
    filter: brightness(0.7);
    -webkit-filter: brightness(0.7);
  }

  .hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    width: 100%;
  }

  .hovereffect:hover h2 {
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: translate3d(-50%, -50%, 0) scale3d(0.8, 0.8, 1);
    transform: translate3d(-50%, -50%, 0) scale3d(0.8, 0.8, 1);
  }
</style>
<!DOCTYPE html>
<html lang="en">

<head>

  <style>
    .single-gallery-image {
      margin-top: 30px;
      background-repeat: no-repeat !important;
      background-position: center center !important;
      background-size: cover !important;
      height: 200px;
    }

    .single-gallery-image {
      margin-top: 30px;
      background-repeat: no-repeat !important;
      background-position: center center !important;
      background-size: cover !important;
      height: 200px
    }
  </style>
</head>


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
</head>
<style>
  html {
    scroll-behavior: smooth;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-primary ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Exodus<span class="text-warning">Tours and Travel Agency</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="index.php#destination" class="nav-link">Destination</a></li>
          <li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
          <li class="nav-item"><a href="index.php#blog" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="index.php#service" class="nav-link">Service</a></li>
          <li class="nav-item text-warning"><a href="gallery.php" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

        </ul>
        <a href="signup_page.php"><button style="border-radius: 10px; background-color: #007bff; height: 40px; width: 140px; color:white;font:bold">Login/register</button></a>
      </div>
    </div>
  </nav>
  <!-- END nav -->


  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <!-- <img style="width:130px;" src="assets/img/logo/logo.png" alt=""> -->

          </div>
        </div>
      </div>
    </div>



    <!-- End Sample Area -->

    <!-- Start Button -->

    <!-- End Button -->


    <div class="section-top-border " style="margin: 15px;padding-top:120px; ">
      <h3 class="text-warning">Images Gallery</h3>
      <div class="row gallery-item">

        <?php
        while ($row = $query->fetch_assoc()) {
          $imageURL = 'dashboard/img/gallery/' . $row["image"];
          if ($query->num_rows > 0) {
        ?>

            <div class="col-md-4 hovereffect rounded" style="padding-bottom:20px;">
              <a href="<?php echo $imageURL; ?>" class="img-pop-up">
                <div class="single-gallery-image hovereffect">
                  <img style="width:100%; height:150%; padding-bottom:30px;" class="rounded" src="<?php echo $imageURL; ?>" alt="">

                  <div class="overlay">
                    <h2><?php echo $row["title"] ?></h2>

                  </div>
              </a>
              <h6 class="text-white" style="padding-left:20px;"><a href="#"><?php echo $row["title"] ?></a></h6>
            </div>
      </div>
  <?php
          }
        }
  ?>

    </div>
    </div>





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
  var popUp = $('.single_gallery_part, .img-pop-up');
  if (popUp.length) {
    popUp.magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  }
</script>