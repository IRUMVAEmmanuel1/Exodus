<?php
include 'dashboard/db/connection.php';
$id = $_GET['id'];

$query = "SELECT * FROM `blog` WHERE  id=$id";
$detail = $connect->query($query);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Exodus </title>
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
          <li class="nav-item"><a href="index.php#destination" class="nav-link">Destination</a></li>
          <li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
          <li class="nav-item active"><a href="#" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="index.php#service" class="nav-link">Service</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight " style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="index.php">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Blog Details</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
          <?php
          while ($row = $detail->fetch_assoc()) {
            $imageURL = 'dashboard/img/blog/' . $row["file_name"];
          ?>



            <h2 class="mb-3"><?php echo $row["title"] ?></h2>
            <p><?php echo $row["title"] ?>.</p>
            <p>
              <img src="<?php echo $imageURL ?>" alt="" class="img-fluid">
            </p>

            <?php

            ?>
            <h3 class="mt-3"><?php echo $row["title"] ?></h3>
            <p><?php echo $row["description"] ?></p>

          <?php
          }
          $query = $connect->query("SELECT * FROM feedback")
          ?>
          <div class="pt-5 mt-5">
            <h3 class="mb-5" style="font-size: 20px; font-weight: bold;"><?= $query->num_rows; ?> Comments</h3>
            <ul class="comment-list">

              <?php
              $query = $connect->query("SELECT * FROM feedback ORDER BY id DESC LIMIT 5");

              if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                  $imageURL = 'endUserDashboard/profiles/' . $row["profile"];

              ?>
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="<?php echo $imageURL; ?>" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3><?php echo $row["name"] ?></h3>
                      <div class="meta"><?php echo $row["date"] ?></div>
                      <p><?php echo $row["comment"] ?></p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
              <?php
                }
              }
              ?>

            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5" style="font-size: 20px; font-weight: bold;">Leave a comment</h3>
              <form action="#" class="p-5 bg-light">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate bg-light py-md-5">
          <div class="sidebar-box pt-md-5">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
            <div class="categories">
              <h3>Categories</h3>
              <?php
              $query = $connect->query("SELECT * FROM hotels");
              $query2 = $connect->query("SELECT * FROM destination")
              ?>
              <li><a href="hotel.php">Hotels <span>(<?= $query->num_rows; ?>)</span></a></li>
              <li><a href="#">Tour <span>(<?= $query2->num_rows; ?>)</span></a></li>
              <li><a href="index.php#destination">Destination <span>(<?= $query2->num_rows; ?>)</span></a></li>
              <!-- <li><a href="#">Drinks <span>(42)</span></a></li>
            <li><a href="#">Foods <span>(14)</span></a></li>
            <li><a href="#">Travel <span>(140)</span></a></li> -->
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3>Recent Blog</h3>

            <?php
            $query = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 10";
            $detail = $connect->query($query);
            while ($row = $detail->fetch_assoc()) {
              $imageURL = 'dashboard/img/blog/' . $row["file_name"];
            ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('<?php echo $imageURL ?>');"></a>
                <div class="text">
                  <h3 class="heading"><a href="#"><?php echo $row["title"] ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="fa fa-calendar"></span> <?php echo $row["date"] ?></a></div>
                  </div>
                </div>
              </div>
            <?php
            } ?>


          </div>


          <div class="sidebar-box ftco-animate">
            <h3>Explore Beyond with Us</h3>
            <p>With a team of experienced and knowledgeable travel experts, Exodus provides customized and high-quality tour packages that cater to the unique interests and needs of each customer. From safari trips to cultural tours, Exodus offers a wide range of options for travelers to choose from.</p>
          </div>
        </div>

      </div>
    </div>
  </section> <!-- .section -->

  <section class="ftco-intro ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <div class="img" style="background-image: url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <h2>Exodus Travel Agency</h2>
            <p>We can manage your dream building A small river named Duden flows by their place</p>
            <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
          </div>
        </div>
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