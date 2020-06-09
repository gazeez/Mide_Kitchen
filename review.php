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
                 }
}
else
{
  header("location:index.php");
}

if (isset($_GET['id']))
{
  $ido = $_GET['id'];
  $gname = $_GET['name'];
}
else
{
  header("location:index.php");

}

if (isset($_POST['submit']))
	{
$review=$_POST['review'];
$oid= time();

    $Query="INSERT INTO reviews(id,orderid,name,review) VALUES('$oid','$ido','$gname','$review')";
  	   mysqli_query($conn, $Query);

    header("location:index.php?response=Order Completed");


	}



?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Gafar Kitchen - Submit Review</title>
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
                    <a href="index.html" class="navbar-brand">Gafar <span>.</span> Kitchen</a>
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
                           <a><?php if (isset($_SESSION['user'])) { echo $uname; } else  { } ?></a>
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

     <!-- REVIEWS -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                      <div class="col-md-12 col-sm-12">
                           <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                <h2>Your order has been submitted successfully and will be delivered in 25 minutes.</h2>
                           </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Submit Review</h2>
                              </div>
                         </div>

                         <!-- REVIEWS FORM -->
                         <form action="" method="post" class="wow fadeInUp">

                              <div class="col-md-12 col-sm-12">

                                   <textarea class="form-control" rows="6" id="cf-message" name="review" placeholder="Tell us about our service"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
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
                                   <p>This is our address,<br> this is our address<br>this is our address</p>
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
                                   <p><a href="mailto:info@gafarkitchen.com">info@company.com</a></p>
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
                              <p><br>Copyright &copy; 2020 <br>Gafar Kitchen</p>
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
