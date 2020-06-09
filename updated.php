<?php
ob_start();
require("connect.php");

if (isset($_SESSION['user']))
{
  $user = $_SESSION['user'];

  $Quedybbr="SELECT * FROM users WHERE email='$user'";
     $run_quedybbr=mysqli_query($conn, $Quedybbr) or die('Error!!! ,query failed'.mysql_error());

          while($profidybbr=mysqli_fetch_array($run_quedybbr))
                 {
                 $uname=$profidybbr['name'];
                 $uaddress=$profidybbr['address'];
                 $uphone=$profidybbr['phone'];
                 }
}
else
{
  header("location:index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Mide Cooks - Update Profile</title>
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
     <link rel="stylesheet" href="css/templatemo-stylee.css">

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
                         <li style="color:#CE3232; padding-top:14px;"><a href="index.php">Home</a></li>

                         <li style="color:#CE3232; padding-top:14px;"><a href="index.php#about">About</a></li>
                         <li style="color:#CE3232; padding-top:14px;"><a href="index.php#team">Chef</a></li>
                         <li style="color:#CE3232; padding-top:14px;"><a href="index.php#menu">Menu</a></li>
                         <li style="color:#CE3232; padding-top:14px;"><a href="index.php#contact">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li>
                           <a href="update.php"><?php if (isset($_SESSION['user'])) { echo "UPDATE PROFILE"; } else  { } ?></a>
                         </li>

                         <?php
                        if (isset($_SESSION['user'])) { echo "<a href='logout.php' class='section-btn'>Logout</a>";
                         }
                         else
                         {
                         	echo "<a href='login.php' class='section-btn'>Login</a>";
                         }
                         ?>


                    </ul>
               </div>

          </div>
     </section>



     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container"><br><br><br>
               <div class="row">


                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              </div>
                         </div>

                         <!-- ORDER FORM -->


                              <!-- DISPLAYING FOOD PARAMETERS -->
                              <h2> PROFILE UPDATED </h2>



                                   <p><a href="index.php">BACK TO HOME</a></p>
                              </div>
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
