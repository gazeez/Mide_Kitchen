<?php
ob_start();
require("connect.php");

if (isset($_SESSION['user'])) {
     $user = $_SESSION['user'];

     $Quedybbr = "SELECT * FROM users WHERE email='$user'";
     $run_quedybbr = mysqli_query($conn, $Quedybbr) or die('Error!!! ,query failed' . mysql_error());

     while ($profidybbr = mysqli_fetch_array($run_quedybbr)) {
          $uname = $profidybbr['name'];
     }
} else {
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

     <title>Mide Cooks - Welcome</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>

<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Mide <span>.</span> Cooks</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#team" class="smoothScroll">Chef</a></li>
                         <li><a href="#menu" class="smoothScroll">Menu</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li>
                           <a href="update.php"><?php if (isset($_SESSION['user'])) { echo $uname; } else  { } ?></a>
                         </li>

                         <?php
                         if (isset($_SESSION['user'])) {
                              echo "<a href='logout.php' class='section-btn'>Logout</a>";
                         } else {
                              echo "<a href='login.php' class='section-btn'>Login</a>";
                         }
                         ?>


                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

               <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h3>Gafar Kitchen &amp; Restaurant</h3>
                                        <h1>Our mission is to provide an unforgettable experience</h1>
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our chef</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h3>Your Perfect Breakfast</h3>
                                        <h1>The best dinning quality can be here too!</h1>
                                        <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h3>New Restaurant in Town</h3>
                                        <h1>Enjoy our special menus every Sunday and Friday</h1>
                                        <a href="#contact" class="section-btn btn btn-default smoothScroll">Reservation</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Read our story</h4>
                                   <h2>We've been Making The Delicious Foods Since 1999</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Fusce hendrerit malesuada lacinia. Donec semper semper sem vitae malesuada. Proin scelerisque risus et ipsum semper molestie sed in nisi. Ut rhoncus congue lectus, rhoncus venenatis leo malesuada id.</p>
                                   <p>Sed elementum vel felis sed scelerisque. In arcu diam, sollicitudin eu nibh ac, posuere tristique magna. You can use this template for your cafe or restaurant website. Please tell your friends about <a href="https://plus.google.com/+templatemo" target="_parent">templatemo</a>. Thank you.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>

               </div>
          </div>
     </section>


          <!-- TEAM -->
          <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Meet our chef</h2>
                              <h4>They are nice, professional &amp; friendly</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/team-image1.jpg" class="img-responsive" alt="">
                              <div class="team-hover">
                                   <div class="team-item">
                                        <h4>Duis vel lacus id magna mattis vehicula</h4>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                         <div class="team-info">
                              <h3>Alhaja T.</h3>
                              <p>Kitchen Officer</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/team-image2.jpg" class="img-responsive" alt="">
                              <div class="team-hover">
                                   <div class="team-item">
                                        <h4>Cras suscipit neque quis odio feugiat</h4>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-instagram"></a></li>
                                             <li><a href="#" class="fa fa-flickr"></a></li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                         <div class="team-info">
                              <h3>Gafar Azeez</h3>
                              <p>Owner &amp; Manager</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/team-image3.jpg" class="img-responsive" alt="">
                              <div class="team-hover">
                                   <div class="team-item">
                                        <h4>Etiam auctor enim tristique faucibus</h4>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-github"></a></li>
                                             <li><a href="#" class="fa fa-google"></a></li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                         <div class="team-info">
                              <h3>Mide O.</h3>
                              <p>Owner &amp; Head Chef</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- MENU-->
     <a name='menu'></a>
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Menu</h2>
                              <h4>Breakfast &amp; Dining<br></h4>
                              </h2><?php
                                   if (isset($_GET['response'])) {
                                        $gres = $_GET['response'];
                                        echo $gres;
                                   }
                                   ?>
                              </h2>
                         </div>


                    </div>

                    <!-- THE FOLLOWING CODE DISPLAYS MENU ITEM -->

                    <?php
                    $Quedybbr = "SELECT * FROM menu";
                    $run_quedybbr = mysqli_query($conn, $Quedybbr) or die('Error!!! ,query failed' . mysql_error());

                    while ($profidybbr = mysqli_fetch_array($run_quedybbr)) {
                         $id = $profidybbr['id'];
                         $title = $profidybbr['title'];
                         $category = $profidybbr['category'];
                         $price = $profidybbr['price'];
                         $image = $profidybbr['image'];

                         echo "
                      <div class='col-md-4 col-sm-6'>

                         <div class='menu-thumb'>
                              <a href='food.php?id=$id' title='$title'>
                                   <img src='menu/$image.jpg' class='img-responsive'>

                                           <a href='food.php?id=$id'>
                                            <div class='menu-info'>
                                                 <div class='menu-item'>
                                                      <h3>$title</h3>
                                                      <p>$category</p>
                                                 </div>
                                                 <div class='menu-price'>
                                                      <span>$$price</span>
                                                 </div>
                                          </a>
                                          </div>
                                          </a>
                                     </div>
                                </div> ";
                    }
                    ?>




               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Reviews</h2>
                         </div>
                    </div>

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">


                              <!-- THE FOLLOWING CODE DISPLAYS BUYERS REVIEWS -->

                              <?php
                              $Quedybbr = "SELECT * FROM reviews LIMIT 0,9";
                              $run_quedybbr = mysqli_query($conn, $Quedybbr) or die('Error!!! ,query failed' . mysql_error());

                              while ($profidybbr = mysqli_fetch_array($run_quedybbr)) {
                                   $id = $profidybbr['id'];
                                   $name = $profidybbr['name'];
                                   $review = $profidybbr['review'];

                                   echo "

                                        <div class='item'>
                                             <p>$review</p>
                                                  <div class='tst-author'>
                                                       <h4>$name</h4>
                                                  </div>
                                        </div> ";

                              }
                              ?>


                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <!-- Location Point on Map -->
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.601329911524!2d-113.52156568460641!3d53.5470322673619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a02232c66be621%3A0x79a6a410622b976e!2sOliver%20Square%20East%20and%20West!5e0!3m2!1sen!2sca!4v1590915297471!5m2!1sen!2sca" allowfullscreen></iframe>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Contact Us</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="sent.php" method="POST" class="wow fadeInUp">

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Your message has been sent successfully.</h6>

                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell Us About Your Occasion"></textarea>

                                   <button type="submit" name="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>123 Black Lives Matter Avenue NW,<br> Everywhere In, AB<br> T5J 0K6 </p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Reservation</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>012-345-6789 | 987-654-3210</p>
                                   <p><a href="mailto:info@midecooks.com">info@company.com</a></p>
                                   <p>LINE: eatery247 </p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Monday: Closed</p>
                                   <div>
                                        <strong>Tuesday to Friday</strong>
                                        <p>7:00 AM - 9:00 PM</p>
                                   </div>
                                   <div>
                                        <strong>Saturday - Sunday</strong>
                                        <p>11:00 AM - 10:00 PM</p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                              <p><br>Copyright &copy; 2020 <br>Mide Cooks</p>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>