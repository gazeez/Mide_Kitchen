<?php
ob_start();
require("connect.php");

if (isset($_SESSION['user']))
{
  header("location:index.php");
}
else
{
}


if (isset($_POST['submit']))
	{
$email=$_POST["email"];
$password=$_POST['password'];
$passwordagain=$_POST['passwordagain'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];

//How to confirm password in php
//https://stackoverflow.com/questions/27216595/how-to-validate-email-id-and-password-confirm-password-in-php
//if ($password != $passwordagain)
     //{    $response = "<h6 align='center'>Error! passwords does not match.</h6>";   }
     
 if (preg_match('/[A-Za-z]/', $password) && preg_match('/[0-9]/', $password))
{    
     
     
if ($password == $passwordagain)
	{
          $password = password_hash ($password, PASSWORD_DEFAULT);
		$verilog="SELECT * FROM users WHERE email='$email'";
		$run_verilog=mysqli_query($conn,$verilog);
		$count=mysqli_num_rows($run_verilog);

		if($count>0)
		{

      $response = "<h6 align='center'>Error! This email already exists in the database.</h6>";

     }
    
	else
	{
    $Query="INSERT INTO users(name,email,password,phone,address) VALUES('$name','$email','$password','$phone','$address')";
  	   mysqli_query($conn, $Query);

    $_SESSION['user'] = $email;
    header("location:index.php");
   	}
	}
    else
    
		{

      $response = "<h6 align='center'>Error! Passwords don't tally.</h6>";

	}
    }
    else
    
		{

      $response = "<h6 align='center'>Error! Password must contain at least a letter and a number.</h6>";

	}

	}


?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Mide Cooks - Login</title>
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

                         </li>

                         <a href='index.php' class='section-btn'>Home</a>


                    </ul>
               </div>

          </div>
     </section>




     <!-- LOGIN -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>User Login</h2>
                              </div>
                              <?php
                              if (isset($response))
                    					{
                    					echo "<h6>$response</h6><br/>";
                    					}
                    					?>
                         </div>

                         <!-- REGISTRATION FORM -->
                         <form action="" method="POST" class="wow fadeInUp">
                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="name" placeholder="Full Name" required>
                                   <input type="text" class="form-control" id="cf-subject" name="email" placeholder="Email Address" required>
                                   <input type="password" class="form-control" id="cf-subject" name="password" placeholder="Password" required>
                                   <input type="password" class="form-control" id="cf-subject" name="passwordagain" placeholder="Confirm Password" required>
                                   <input type="text" class="form-control" id="cf-subject" name="address" placeholder="Address" required>
                                   <input type="text" class="form-control" id="cf-subject" name="phone" placeholder="Phone Number" required>
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Register</button>
                              </div>
                         </form>
                         <p align="center">Already registered? <a href="login.php">Login Now</a></p>
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
