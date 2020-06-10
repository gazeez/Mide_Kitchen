<?php
ob_start();
require("connect.php");

        $user = $_SESSION['user'];
        
   $Quedybbr="DELETE FROM users WHERE email='$user'";
     $run_quedybbr=mysqli_query($conn, $Quedybbr) or die('Error!!! ,query failed'.mysql_error());
       
  		
  unset($_SESSION['user']);
  session_destroy($_SESSION['user']);
  

    header("location:index.php");
?>