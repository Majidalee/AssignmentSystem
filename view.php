<?php


require "config.php";
session_start();
$username = $_SESSION['username'];


    $status=$_POST['viewed'];
    // print_r($_POST);
    if($status){
    	 // UPDATE IS_SEEN COLUMN HERE
    	  $query = "UPDATE `users` SET `is_seen` = 'viewed' WHERE `users`.`username` = '$username';";
          $runUpdate = @mysqli_query($conn,$query);
    }
    	  if($runUpdate){
    	  		header('location:welcome.php');
}
?>