<?php
ob_start();
require("connect.php");

        $user = $_SESSION['user'];
  		
  unset($_SESSION['user']);
  session_destroy($_SESSION['user']);
  

    header("location:index.php");
?>