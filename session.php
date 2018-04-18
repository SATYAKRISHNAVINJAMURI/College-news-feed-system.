<?php
   include('config.php');
   session_start();
   
  if($user_check = $_SESSION['login_user']){
  	$query = mysqli_query($db,"SELECT * FROM user WHERE user_name = '$user_check'");
   
   $row = mysqli_fetch_array($query) or die(mysql_error());

   
   $login_session = $row['user_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
  }
  else{
  	header("location:loginpage.html");
  }
?>